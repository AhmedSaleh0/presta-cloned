<?php
/**
 * Class import products data from CSV file.
 */

class ImportCSV extends ImportProductData
{
    public $prod_data = array();
    private $file_name;

    public function __construct()
    {
        $this->file_name = _PS_DOWNLOAD_DIR_.'upd_'.rand().'.csv';
    }

    public function getData($source)
    {
        $filebody = file_get_contents($source);
        if ($filebody===FALSE) return ['error'=>'Source file not available '.$source];
        file_put_contents($this->file_name, $filebody);
        $handle = fopen($this->file_name, "r");
        if ($handle !== FALSE) {
            $fields = array();
            $row = 0;
            while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                if($row==0) {
                    $columns = $data;
                }
                else
                {
                    foreach ($data as $key => $value) {
                        $value = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $value);
                        $fields[$columns[$key]] = $value;
                    }
                    $this->prod_data[] = $fields;
                }
                $row++;
            }
            fclose($handle);
            if (file_exists($this->file_name)) @unlink($this->file_name);
            return $this->prod_data;
        }
        else
        {
            if (file_exists($this->file_name)) @unlink($this->file_name);
            return ['error'=>'Data is null'.$this->file_name];
        }

    }
}

