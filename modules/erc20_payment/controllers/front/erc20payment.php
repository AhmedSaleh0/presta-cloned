<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

Class Erc20_PaymentErc20paymentModuleFrontController extends ModuleFrontController
{
    /**
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		$wallet = explode("erc20_payment_wallet=",$_SERVER['REQUEST_URI'])[1];

        $order_id = $this->getOrderIdFromWalletAddress($wallet);
        $amountNeededForPayment = $this->getOrderAmountNeededForPayment($order_id);
        $amountInPaymentWallet = $this->getPCHAmountFromPaymentWallet($wallet);

        if($amountInPaymentWallet > $amountNeededForPayment) {
            $this->setOrderStatusForPaymentReceived($order_id);
        }

		return true;
	}

    public function getPCHAmountFromPaymentWallet($address) {
		$postfields = array (

				 'private' => '0422124dcddfa51389662dacc112560f1577fd853047f0b2c3c5d16315a37e96',  // dummy private key, because private key is not necessary for that function call, but it needs to be filled in!
				 'gas_limit' => 20000,
				 'params' => [$address]
				 );

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.blockcypher.com/v1/eth/main/contracts/c6b771a5998da05e60fc6d42c5248947235ee0fb/balanceOf?token=9216e5ed002b4e83a3e8bb54cfd17daf');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		$result = json_decode((curl_exec($ch)), true);

		return $result['results'][0] / 100000000;
	}

    public function getOrderIdFromWalletAddress($wallet) {
        $sql = 'SELECT order_id FROM '._DB_PREFIX_.'erc20_payment WHERE address = "'.pSQL($wallet).'"';
        $result = Db::getInstance()->getValue($sql);
        return $result;
    }

    public function getOrderAmountNeededForPayment($orderId) {
        $sql = 'SELECT total_paid FROM '._DB_PREFIX_.'orders WHERE id_order = '.pSQL($orderId);
        $result = Db::getInstance()->getValue($sql);
        return $result;
    }

    public function setOrderStatusForPaymentReceived($orderId) {
        $objOrder = new Order($orderId);
        $history = new OrderHistory();
        $history->id_order = (int)$objOrder->id;
        $history->changeIdOrderState(2, (int)($objOrder->id));
    }
}
