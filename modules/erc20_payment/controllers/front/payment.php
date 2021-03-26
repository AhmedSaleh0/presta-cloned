<?php

class Erc20_PaymentPaymentModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();

		$cart = $this->context->cart;
		if (!$this->module->checkCurrency($cart))
			Tools::redirect('index.php?controller=order');

		$total = sprintf(
			$this->getTranslator()->trans('%1$s (tax incl.)', array(), 'Modules.Erc20payment.Shop'),
			Tools::displayPrice($cart->getOrderTotal(true, Cart::BOTH))
		);

		$this->context->smarty->assign(array(
      'back_url' => $this->context->link->getPageLink('order', true, NULL, "step=3"),
			'confirm_url' => $this->context->link->getModuleLink('erc20_payment', 'validation', [], true),
			'image_url' => $this->module->getPathUri() . 'erc20_payment.jpg',
			'cust_currency' => $cart->id_currency,
			'currencies' => $this->module->getCurrency((int)$cart->id_currency),
			'total' => $total,
			'this_path' => $this->module->getPathUri(),
			'this_path_ssl' => Tools::getShopDomainSsl(true, true).__PS_BASE_URI__.'modules/'.$this->module->name.'/'
		));

		$this->setTemplate('payment_execution.tpl');
	}
}
