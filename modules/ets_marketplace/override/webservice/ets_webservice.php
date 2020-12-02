<?php
/**
 * Ets_marketplace REST API
 * Available methods:
 * GET api/marketplace/shops
 * GET api/marketplace/shops/{id_shop}
 * GET api/marketplace/products
 * GET api/marketplace/products/{id_product}
 * POST api/marketplace/products
 * PUT api/marketplace/products/{id_product}
 * DELETE api/marketplace/products/{id_product}
 * GET api/marketplace/categories/
 * GET api/marketplace/categories/{id_category}
 * DELETE api/marketplace/categories/{id_category}
 */

if(!defined('_PS_VERSION_')) exit;

require_once('../modules/ets_marketplace/ets_marketplace.php');

$available_methods = array('shops','products','categories');
$urlSegment = explode("/",$_SERVER['REQUEST_URI']);

$method = $urlSegment[3];
$id = (isset($urlSegment[4])) ? $urlSegment[4] : 0;

if (!$method) {
	header('Content-Type: application/json;charset=UTF-8');
	echo json_encode(array('Available methods' => $available_methods));
	die();
}

if (!in_array($method,$available_methods)) header('HTTP/1.0 405 Method Not Allowed');

$ws_account_description = Db::getInstance()->getValue('SELECT description FROM `'._DB_PREFIX_.'webservice_account` WHERE `key`="'.$_SERVER['PHP_AUTH_USER'].'"');
if (!$ws_account_description or !preg_match("/shop:\d+/", $ws_account_description))
{
	header('HTTP/1.0 403 Forbidden');
	die('Marketplace API Error! Seller Not defined');
}

preg_match('/shop:(\d+)/', $ws_account_description, $matches, PREG_OFFSET_CAPTURE, 0);
$id_shop = $matches[1][0];
$seller = new Ets_mp_seller($id_shop);


$errors = array();

if ($method=='shops') {

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':

			// if ($id and $id != $id_shop)
			// {
			// 	header('HTTP/1.0 403 Forbidden');
			// 	die('Restricted access to different Shop ID');
			// }

        	$filter = ($id) ? ' AND s.id_seller='.$id : '';
        	$objects = Ets_mp_seller::_getSellers($filter);

            header('Content-Type: application/json;charset=UTF-8');
			echo json_encode($objects);

            break;

        case 'POST':
        	header('HTTP/1.0 405 Method Not Allowed');
            break;

        case 'PUT':
            header('HTTP/1.0 405 Method Not Allowed');
            break;

        case 'DELETE':
            header('HTTP/1.0 405 Method Not Allowed');
            break;

        default:
            header('HTTP/1.0 405 Method Not Allowed');
            break;
    }
}

if ($method=='products') {

    // Fields matching
    $col_name = 'Name';
    $col_link_rewrite = 'Link rewrite';
    $col_image = 'Image';
    $col_quantity = 'Quantity';
    $col_price = 'Price';
    $col_category = 'Categories';
    $col_default_category = 'Default category';
    $col_combination = 'Combinations';
    $col_description = 'Description';
    $col_description_short = 'Summary';
    $col_specific_price = 'Specific price';

    switch ($_SERVER['REQUEST_METHOD']) {

        case 'GET':

        	$where = ($id) ? 'WHERE ps.id_product='.$id : '';
        	$sql = 'SELECT * FROM `'._DB_PREFIX_.'ets_mp_seller_product` mp INNER JOIN `'._DB_PREFIX_.'product_shop` ps ON mp.id_product=ps.id_product '.$where.' ';
        	#var_export($sql);
            $objects = Db::getInstance()->executeS($sql) ?? [];

            header('Content-Type: application/json;charset=UTF-8');
			echo json_encode($objects);

            break;

        case 'POST':

        	require_once('../modules/ets_marketplace/classes/updateProducts.php');

	        $input = file_get_contents('php://input');

			/* input data in JSON file format:
			[
		        {
		            "Name": "nnn",
		            "Link rewrite": "rewrite",
		            "Image": "https://demo1.ets-demos.com/marketplace/img/p/8/8.jpg",
		            "Quantity": "666",
		            "Price": "222",
		            "Categories": "2,9",
		            "Default category": "2",
		            "Combinations": "",
		            "Description": "Description2",
		            "Summary": "Summary2",
		            "Specific price": "88"
		        },
		        {...}
	        ]
			*/

			$input_data = json_decode($input, TRUE);

			foreach ($input_data as $data) {

	        	$updateProducts = new UpdateProducts($seller, $data);

				$result = $updateProducts->addProduct($data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price);

				if ($result["error"]!='') {

					$errors[] = $result["error"];

				}
			}

			if ($result and count($errors)==0) {

	            header('HTTP/1.0 201 Created');
	            #\Location: /:entity/:new_id
	   			// header('Content-Type: application/json;charset=UTF-8');
				// echo json_encode(array('method' => 'POST',
				// 		           	   'success' => $result,
				// 		        		));
			}
			else
			{

			    header('HTTP/1.0 400 Bad Request');
			    echo json_encode(array(
			        'error' => 'Add Products Error',
			        'message' => implode(" ",$errors)
			    ));
			}

            break;

        case 'PUT':

        	if ($id)
        	{
        		require_once('../modules/ets_marketplace/classes/updateProducts.php');

        		$input = file_get_contents('php://input');

				$input_data = json_decode($input, TRUE);

				foreach ($input_data as $data) {

		        	$updateProducts = new UpdateProducts($seller, $data);

					$result = $updateProducts->updateProduct($id,$data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price);

					if ($result["error"]!='') {

						$errors[] = $result["error"];

					}

				}

				if ($result and count($errors)==0) {

		            header('HTTP/1.0 200 Ok');
		            #\Location: /:entity/:new_id
		   			// header('Content-Type: application/json;charset=UTF-8');
					// echo json_encode(array('method' => 'POST',
					// 		           	   'success' => $result,
					// 		        		));
				}
				else
				{

				    header('HTTP/1.0 400 Bad Request');
				    echo json_encode(array(
				        'error' => 'Add Products Error',
				        'message' => implode(" ",$errors)
				    ));
				}


        	}

			else

			{
			    header('HTTP/1.0 400 Bad Request');
			    echo json_encode(array(
			        'error' => 'Update Product Error',
			        'message' => 'Product ID required'
			    ));
			}

            #header('HTTP/1.0 405 Method Not Allowed');
            break;

        case 'DELETE':

        	if ($id)
        	{
	        	// hookActionProductDelete(['id_product'=>$id])
                $product = new Product($id);
                $status = $product->delete();

	            Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'ets_mp_seller_product` WHERE `id_product`='.(int)$id);
	            Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'cart_rule` WHERE `reduction_product`="'.(int)$id.'"');

		        header('Content-Type: application/json;charset=UTF-8');
				echo json_encode(array('method' => 'DELETE',
						           	   'success' => $status,
						        		));
			}

			else

			{
			    header('HTTP/1.0 400 Bad Request');
			    echo json_encode(array(
			        'error' => 'Delete Product Error',
			        'message' => 'Product ID required'
			    ));
			}

            break;

        default:

            header('HTTP/1.0 405 Method Not Allowed');
            break;
    }
}

if ($method=='categories') {

    switch ($_SERVER['REQUEST_METHOD']) {

        case 'GET':

        	$sqlFilter = ($id) ? " AND c.`id_category`=".$id." " : '';
        	$objects = Category::getCategories(false, true, true, $sqlFilter);

            header('Content-Type: application/json;charset=UTF-8');
			echo json_encode($objects);

            break;

        case 'DELETE':

        	if ($id)
        	{
                $category = new Category($id);
                $status = $category->delete();

		        header('Content-Type: application/json;charset=UTF-8');
				echo json_encode(array('method' => 'DELETE',
						           	   'success' => $status,
						        		));
			}

			else

			{
			    header('HTTP/1.0 400 Bad Request');
			    echo json_encode(array(
			        'error' => 'Delete Category Error',
			        'message' => 'Category ID required'
			    ));
			}

            break;

        default:

            header('HTTP/1.0 405 Method Not Allowed');
            break;
    }
}

