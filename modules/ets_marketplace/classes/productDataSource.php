<?php
/**
 * These classes add import and update from external data sources.
 */

if (!defined('_PS_VERSION_'))
	exit;


class ProductDataSource extends ObjectModel
{
    public $source;
    protected static $instance;

    public static $definition = array(
        'table' => 'ets_mp_seller_product_source',
        'primary' => 'id',
        'multilang' => false,
        'fields' => array(
            'id' => array('type' => self::TYPE_INT),
            'seller' => array('type' => self::TYPE_INT),
            'interval' => array('type' => self::TYPE_INT),
            'source' => array('type' => self::TYPE_STRING),
            'last_update' => array('type' => self::TYPE_INT),
            'result' =>   array('type' => self::TYPE_STRING),
        )
    );

    public function __construct($source = null)
    {
        parent::__construct($source);
        $this->context = Context::getContext();
        $this->source = $source;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new ProductDataSource();
        }
        return self::$instance;
    }

    public function parseSource()
    {
        if ($this->source=='') return ['error'=>'Data source is empty'];

        $import = new ImportFactory();

        if (preg_match('/(\.csv)$/i',$this->source))
        {
            $dataset = $import->viaSource('CSV')->getData($this->source);
            return $dataset;
        }
        if (preg_match('/(\.xls)$/i',$this->source))
        {
            $dataset = $import->viaSource('XLS')->getData($this->source);
            return $dataset;
        }
        return ['error'=>'Unknown source type: '.$this->source];
    }
}

abstract class ImportProductData
{
    abstract protected function getData($source);
}

abstract class ImportsFactory
{
    abstract protected function viaSource($type);
}

class ImportFactory extends ImportsFactory
{
    public function viaSource($type)
    {
        switch ($type) {
            case'CSV':
                require_once "classes4import/ImportCSV.php";
                return new ImportCSV();
                break;
            case'XLS':
                require_once "classes4import/ImportXLS.php";
                return new ImportXLS();
                break;
            default:
                return ['error'=>'Data type is unknown'];
        }
    }
}
