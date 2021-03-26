

<dl>
    <dt>{l s='Amount' d='Modules.Erc20payment.Shop'}</dt>
    <dd>{$amount_erc20} ({$total})</dd>
    <dt>{l s='Payment wallet' d='Modules.Erc20payment.Shop'}</dt>
    <dd><a id="ethereum_address" onclick="copyToClipboard('ethereum_address')" class="copyaddress_link">0x{$wallet}</a></dd>
    <dt>{l s='QR-Code' d='Modules.Erc20payment.Shop'}</dt>
    <dd><img width="180" height="180" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=0x{$wallet}"/></dd>
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
