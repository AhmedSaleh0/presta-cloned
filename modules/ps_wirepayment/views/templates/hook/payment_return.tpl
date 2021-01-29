{**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
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
            <dd><form method="POST" target="_blank" action="https://pcash.world/app/pcashpay/initialize">
                <input type="hidden" name="eur_amount" value="{$amount_erc20_currency_raw}">
                <input type="hidden" name="merchant_token" value="a0733ad70d26725ee24360474e7ef537">
                <input type="hidden" name="cancel_url" value="">
                <input type="hidden" name="success_url" value="">
                <input type="hidden" name="callback_url" value="https://test.etpshopping.com/index.php?fc=module&module=erc20_payment&controller=erc20payment&erc20_payment_wallet=0x{$wallet}">
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


    <p>
      {l s='After sending the PCH and sending the bank wire your order is complete.' d='Modules.Wirepayment.Shop'}<br/>
      {l s='Please send us a bank wire with:' d='Modules.Wirepayment.Shop'}
    </p>
    {include file='module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl'}

    <p>
      {l s='Please specify your order reference %s in the bankwire description.' sprintf=[$reference] d='Modules.Wirepayment.Shop'}<br/>
      {l s='We\'ve also sent you this information by e-mail.' d='Modules.Wirepayment.Shop'}
    </p>
    <strong>{l s='Your order will be sent as soon as we receive payment.' d='Modules.Wirepayment.Shop'}</strong>
    <p>
      {l s='If you have questions, comments or concerns, please contact our [1]expert customer support team[/1].' d='Modules.Wirepayment.Shop' sprintf=['[1]' => "<a href='{$contact_url}'>", '[/1]' => '</a>']}
    </p>
{else}
    <p class="warning">
      {l s='We noticed a problem with your order. If you think this is an error, feel free to contact our [1]expert customer support team[/1].' d='Modules.Wirepayment.Shop' sprintf=['[1]' => "<a href='{$contact_url}'>", '[/1]' => '</a>']}
    </p>
{/if}
