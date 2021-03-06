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
{if $facets|count}
  <div id="search_filters">
 {block name='facets_title'}
    <h4 class="block_title">{l s='Filter By' d='Shop.Theme.Actions'}</h4>
 {/block}
  
    <div class="block_content">
 {block name='facets_clearall_button'}
{if $activeFilters|count}
	<div id="_desktop_search_filters_clear_all" class="hidden-md-down clear-all-wrapper">
      <button data-search-url="{$clear_all_link}" class="btn btn-tertiary js-search-filters-clear-all">
        <i class="material-icons">&#xE14C;</i>
        {l s='Clear all' d='Shop.Theme.Actions'}
      </button>
    </div>
      {/if}
  {/block}
	
	{foreach from=$facets item="facet"}
      {if !$facet.displayed}
        {continue}
      {/if}

        <section class="facet clearfix">
          <h1 class="h6 facet-title hidden-sm-down">{$facet.label}</h1>
          {assign var=_expand_id value=10|mt_rand:100000}
          {assign var=_collapse value=true}
          {foreach from=$facet.filters item="filter"}
            {if $filter.active}{assign var=_collapse value=false}{/if}
          {/foreach}
          <div class="title hidden-lg-up" data-target="#facet_{$_expand_id}" data-toggle="collapse"{if !$_collapse} aria-expanded="true"{/if}>
            <h1 class="h6 facet-title">{$facet.label}</h1>
            <span class="pull-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
              </span>
            </span>
          </div>
          {if $facet.widgetType !== 'dropdown'}

            {block name='facet_item_other'}
            <ul id="facet_{$_expand_id}" class="collapse{if !$_collapse} in{/if}">
                {foreach from=$facet.filters key=filter_key item="filter"}
                {if !$filter.displayed}
                  {continue}
                {/if}

                  <li>
                      <label class="facet-label{if $filter.active} active {/if}" for="facet_input_{$_expand_id}_{$filter_key}">
                      {if $facet.multipleSelectionAllowed}
                        <span class="custom-checkbox">
                          <input
                              id="facet_input_{$_expand_id}_{$filter_key}"
                            data-search-url="{$filter.nextEncodedFacetsURL}"
                            type="checkbox"
                            {if $filter.active } checked {/if}
                          >
                          {if isset($filter.properties.color)}
                            <span class="color" style="background-color:{$filter.properties.color}"></span>
                            {elseif isset($filter.properties.texture)}
                              <span class="color texture" style="background-image:url({$filter.properties.texture})"></span>
                            {else}
                              <span {if !$js_enabled} class="ps-shown-by-js" {/if}><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                          {/if}
                        </span>
                      {else}
                          <span class="custom-radio">
                          <input
                              id="facet_input_{$_expand_id}_{$filter_key}"
                            data-search-url="{$filter.nextEncodedFacetsURL}"
                            type="radio"
                            name="filter {$facet.label}"
                            {if $filter.active } checked {/if}
                          >
                          <span {if !$js_enabled} class="ps-shown-by-js" {/if}><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                        </span>
                      {/if}

                      <a
                        href="{$filter.nextEncodedFacetsURL}"
                        class="_gray-darker search-link js-search-link"
                        rel="nofollow"
                      >
                        {$filter.label}
                        {if $filter.magnitude}
                          <span class="magnitude">({$filter.magnitude})</span>
                        {/if}
                      </a>
                    </label>
                  </li>
                {/if}
              {/foreach}
            </ul>
            {/block}

          {else}
  {block name='facet_item_dropdown'}
            <form>
              <input type="hidden" name="order" value="{$sort_order}">
              <select name="q">
                <option disabled selected hidden>{l s='(no filter)' d='Shop.Theme'}</option>
                {foreach from=$facet.filters item="filter"}
                  {if $filter.displayed}
                    <option
                      {if $filter.active}
                        selected
                        value="{$smarty.get.q}"
                      {else}
                        value="{$filter.nextEncodedFacets}"
                      {/if}
                    >
                      {$filter.label}
                      {if $filter.magnitude}
                        ({$filter.magnitude})
                      {/if}
                    </option>
                  {/if}
                {/foreach}
              </select>
              {if !$js_enabled}
                <button class="ps-hidden-by-js" type="submit">
                  {l s='Filter' d='Shop.Theme.Actions'}
                </button>
              {/if}
            </form>
 {/block}
          {/if}
        </section>
    {/foreach}
	</div>
{/if}
