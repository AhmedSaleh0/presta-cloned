<?php
/**
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
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2020 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_')) {
    exit();
}

class Ets_mp_withdraw_field extends ObjectModel
{
    public $id_ets_mp_payment_method_field;
    public $id_ets_mp_withdrawal;
    public $value;
    public static $definition = array(
        'table' => 'ets_mp_withdrawal_field',
        'primary' => 'id_ets_mp_withdrawal_field',
        'fields' => array(
            'id_ets_mp_withdrawal' => array(
                'type' => self::TYPE_INT,
            ),
            'id_ets_mp_payment_method_field' => array(
                'type' => self::TYPE_INT,
            ),
            'value' => array(
                'type' => self::TYPE_STRING,
            ),
        )
    );
    public	function __construct($id_item = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id_item, $id_lang, $id_shop);
        $this->context= Context::getContext();
	}
 }