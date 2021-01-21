

{if $status == 'ok'}
    <p>
      {l s='Your order on %s is complete.' sprintf=[$shop_name] d='Modules.Erc20payment.Shop'}<br/>
      {l s='Please send us crypto tokens with:' d='Modules.Erc20payment.Shop'}
    </p>
    {include file='module:erc20_payment/views/templates/hook/_partials/payment_infos.tpl'}

    <p>
      {l s='We\'ve also sent you this information by e-mail.' d='Modules.Erc20payment.Shop'}
    </p>
    <strong>{l s='Your order will be sent as soon as we receive payment.' d='Modules.Erc20payment.Shop'}</strong>
    <p>
      {l s='If you have questions, comments or concerns, please contact our [1]expert customer support team[/1].' d='Modules.Erc20payment.Shop' sprintf=['[1]' => "<a href='{$contact_url}'>", '[/1]' => '</a>']}
    </p>
{else}
    <p class="warning">
      {l s='We noticed a problem with your order. If you think this is an error, feel free to contact our [1]expert customer support team[/1].' d='Modules.Erc20payment.Shop' sprintf=['[1]' => "<a href='{$contact_url}'>", '[/1]' => '</a>']}
    </p>
{/if}
