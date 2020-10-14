{*
* 2007-2020 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2020 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<table class="table">
    <thead>
        <tr>
            <th class="text-center">{l s='ID' mod='ets_marketplace'}</th>
            <th>{l s='Seller name' mod='ets_marketplace'}</th>
            <th>{l s='Seller email' mod='ets_marketplace'}</th>
            <th>{l s='Shop name' mod='ets_marketplace'}</th>
            <th>{l s='Shop description' mod='ets_marketplace'}</th>
            <th class="text-center">{l s='Total commission' mod='ets_marketplace'}</th>
            <th>{l s='Action' mod='ets_marketplace'}</th>
        </tr>
    </thead>
    <tbody>
        {if $sellers}
            {foreach from=$sellers item='seller'}
                <tr>
                    <td class="text-center">{$seller.id_seller|intval}</td>
                    <td><a href="{$link->getAdminLink('AdminMarketPlaceSellers')|escape:'html':'UTF-8'}&viewseller=1&id_seller={$seller.id_seller|intval}">{$seller.seller_name|escape:'html':'UTF-8'}</a></td>
                    <td>{$seller.seller_email|escape:'html':'UTF-8'}</td>
                    <td>{$seller.shop_name|escape:'html':'UTF-8'}</td>
                    <td>{$seller.shop_description|strip_tags:'UTF-8'|truncate:120:'...'|escape:'html':'UTF-8'}</td>
                    <td class="text-center">{displayPrice price=$seller.total_commission|floatval}</td>
                    <td>
                        <a class="btn btn-default" href="{$link->getAdminLink('AdminMarketPlaceSellers')|escape:'html':'UTF-8'}&viewseller=1&id_seller={$seller.id_seller|intval}">
                            <i class="icon-search-plus fa fa-search-plus"></i>
                            {l s='View' mod='ets_marketplace'}
                        </a>
                    </td>
                </tr>
            {/foreach}
        {else}
            <tr>
                <td colspan="100%" class="text-center no_data">{l s='No data' mod='ets_marketplace'}</td>
            </tr>
        {/if}
    </tbody>
</table>