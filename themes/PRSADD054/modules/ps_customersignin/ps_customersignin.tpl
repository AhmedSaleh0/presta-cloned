{**
 * 2007-2017 PrestaShop
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
  <div class="tm_userinfotitle">{l s='my account' d='Shop.Theme.Global'}<i class="material-icons">&#xE313;</i></div>
  <ul class="user-info">
    {if $logged}
      <a
        class="account"
        href="{$my_account_url}"
        title="{l s='View my customer account' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons logged">&#xE7FF;</i>
        <span class="hidden-md-down">{l s='Hello,' d='Shop.Theme.Global'}{$customerName}</span>
      </a>
            <a
        class="logout hidden-md-down"
        href="{$logout_url}"
        rel="nofollow"
      >
        <i class="material-icons">&#xe898;</i>
        {l s='Sign out' d='Shop.Theme.Global'}
      </a>
    {else}
      <a
        href="{$my_account_url}"
        title="{l s='Log in to your customer account' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons">&#xe899;</i>
        <span class="hidden-md-down">{l s='Sign in' d='Shop.Theme.Global'}</span>
      </a>
    {/if}
    <div class="head-wishlist" style="display:none;">
            <a
              class="ap-btn-wishlist dropdown-item"
              href="{url entity='module' name='stfeature' controller='mywishlist'}"
              title="{l s='Wishlist' d='Shop.Theme.Global'}"
              rel="nofollow"
            >
              <i class="material-icons">&#xE87E;</i>
              <span>{l s='Wishlist' d='Shop.Theme.Global'}</span>
      <!-- <span class="ap-total-wishlist ap-total"></span> -->
            </a>
          </div>



     <div class="head-compare" style="display:none;">
      <a
        class="ap-btn-compare dropdown-item"
        href="{url entity='module' name='stfeature' controller='productscompare'}"
        title="{l s='Compare' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE863;</i>
        <span>{l s='Compare' d='Shop.Theme.Global'}</span>
<!-- <span class="ap-total-compare ap-total"></span> -->
      </a>
    </div>
  </div>
  <div class="head-wishlist">
            <a
              class="ap-btn-wishlist dropdown-item"
              href="{url entity='module' name='stfeature' controller='mywishlist'}"
              title="{l s='Wishlist' d='Shop.Theme.Global'}"
              rel="nofollow"
            >
              <i class="material-icons">&#xE87E;</i>
              <span>{l s='Wishlist' d='Shop.Theme.Global'}</span>
      <!-- <span class="ap-total-wishlist ap-total"></span> -->
            </a>
          </div>



     <div class="head-compare">
      <a
        class="ap-btn-compare dropdown-item"
        href="{url entity='module' name='stfeature' controller='productscompare'}"
        title="{l s='Compare' d='Shop.Theme.Global'}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE863;</i>
        <span>{l s='Compare' d='Shop.Theme.Global'}</span>
<!-- <span class="ap-total-compare ap-total"></span> -->
      </a>
    </div>
