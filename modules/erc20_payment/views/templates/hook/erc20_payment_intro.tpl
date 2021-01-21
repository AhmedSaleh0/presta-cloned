

<section>
  <p>
    {l s='Please transfer the invoice amount to the specified ETH wallet. You will receive our order confirmation by email containing the necessary details.' d='Modules.Erc20payment.Shop'}
    {if $bankwireReservationDays}
      {l s='Goods will be reserved %s days for you and we\'ll process the order immediately after receiving the payment.' sprintf=[$bankwireReservationDays] d='Modules.Erc20payment.Shop'}
    {/if}
    {if $bankwireCustomText }
        <a data-toggle="modal" data-target="#bankwire-modal">{l s='More information' d='Modules.Erc20payment.Shop'}</a>
    {/if}
  </p>

  <div class="modal fade" id="bankwire-modal" tabindex="-1" role="dialog" aria-labelledby="Bankwire information" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2>{l s='Crypto token payment' d='Modules.Erc20payment.Shop'}</h2>
        </div>
        <div class="modal-body">
          <p>{l s='Payment is made by transfer of the invoice amount to the following wallet:' d='Modules.Erc20payment.Shop'}</p>
          {include file='module:erc20_payment/views/templates/hook/_partials/payment_infos.tpl'}
          {$bankwireCustomText nofilter}
        </div>
      </div>
    </div>
  </div>
</section>
