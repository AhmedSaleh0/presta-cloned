{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $status == 'ok'}


<div class="row">
    {block name='pch_discount_payment'}
      <div id="pch-discount-payment" class="col-md-12">
        <h3 class="h3 card-title">{l s='Save %s with PCH discount' sprintf=[$amount_erc20_currency] d='Modules.Wirepayment.Shop'}:</h3>
        <p>
          {l s='In order to continue you need to send PCH!' d='Modules.Wirepayment.Shop'}<br/>
          {l s='You can send the PCH to the payment wallet or pay directly over the PCash platform.' d='Modules.Wirepayment.Shop'}
        </p>
        <dl>
            <dt>{l s='Amount' d='Modules.Wirepayment.Shop'}</dt>
            <dd>{$amount_erc20} ({$amount_erc20_currency})</dd>
            <dt>{l s='Payment wallet' d='Modules.Wirepayment.Shop'}</dt>
            <dd><a id="ethereum_address" onclick="copyToClipboard('ethereum_address')" class="copyaddress_link">0x{$wallet}</a></dd>
            <dt>{l s='QR-Code' d='Modules.Wirepayment.Shop'}</dt>
            <dd><img width="180" height="180" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=0x{$wallet}"/></dd>
            <dt>{l s='Pay with PCH' d='Modules.Wirepayment.Shop'}</dt>
            <dd><form method="GET" target="_blank" action="https://pcash.world/app/pcashpay/initialize">
                <input type="hidden" name="eur_amount" value="{$amount_erc20_currency_raw}">
                <input type="hidden" name="merchant_token" value="ca05ed8b7dcd062303876e0f939cabfa">
                <input type="hidden" name="cancel_url" value="">
                <input type="hidden" name="success_url" value="">
                <input type="hidden" name="callback_url" value="https://etpshopping.com/index.php?fc=module&module=erc20_payment&controller=erc20payment&erc20_payment_wallet=0x{$wallet}">
                <input type="submit" class="button btn btn-success" value="Pay with PCH">

                </form>

            </dd>
        </dl>

        <script>
        function copyToClipboard(elementId) {


          var aux = document.createElement("input");
          aux.setAttribute("value", document.getElementById(elementId).innerHTML);
          document.body.appendChild(aux);
          aux.select();
          document.execCommand("copy");

          document.body.removeChild(aux);

        }
        </script>

      </div>
    {/block}
</div>



	<p>{l s='After sending the PCH and sending check your order is complete.' d='Modules.Checkpayment.Shop'}<br/>
		<br /><br />
		{l s='Your check must include:' d='Modules.Checkpayment.Shop'}
		<br /><br />- {l s='Payment amount.' d='Modules.Checkpayment.Shop'} <span class="price"><strong>{$total_to_pay}</strong></span>
		<br /><br />- {l s='Payable to the order of' d='Modules.Checkpayment.Shop'} <strong>{if $checkName}{$checkName}{else}___________{/if}</strong>
		<br /><br />- {l s='Mail to' d='Modules.Checkpayment.Shop'} <strong>{if $checkAddress}{$checkAddress}{else}___________{/if}</strong>
		{if !isset($reference)}
			<br /><br />- {l s='Do not forget to insert your order number #%d.' sprintf=[$id_order] d='Modules.Checkpayment.Shop'}
		{else}
			<br /><br />- {l s='Do not forget to insert your order reference %s.' sprintf=[$reference] d='Modules.Checkpayment.Shop'}
		{/if}
		<br /><br />{l s='An email has been sent to you with this information.' d='Modules.Checkpayment.Shop'}
		<br /><br /><strong>{l s='Your order will be sent as soon as we receive your payment.' d='Modules.Checkpayment.Shop'}</strong>
		<br /><br />{l s='For any questions or for further information, please contact our' d='Modules.Checkpayment.Shop'} <a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service department.' d='Modules.Checkpayment.Shop'}</a>.
	</p>
{else}
	<p class="warning">
		{l s='We have noticed that there is a problem with your order. If you think this is an error, you can contact our' d='Modules.Checkpayment.Shop'}
		<a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service department.' d='Modules.Checkpayment.Shop'}</a>.
	</p>
{/if}
