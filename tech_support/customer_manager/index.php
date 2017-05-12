<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_customers';
    }
}

if ($action == 'list_products') {
    $products = get_products(); 
    include('product_list.php');
    }


else if ($action == 'delete_product') {
    $productCode= filter_input(INPUT_POST, 'productCode', 
            FILTER_VALIDATE_INT);
        include('../errors/error.php');
    delete_product($productCode);

} else if ($action == 'show_add_form') {
    $products = get_products();
    include('product_add.php');    
} 
   else if ($action == 'add_product') {
   
    $productCode = filter_input(INPUT_POST, 'productCode');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version');
    $releasedate = filter_input(INPUT_POST, 'releaseDate');
    if ($productCode== NULL || $productCode == FALSE || $name == NULL || $name == FALSE || $version == NULL || $version == FALSE ||$releasedate == NULL || $releasedate == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } 
    else { 
        add_product($productCode, $name, $version, $releasedate);
	header("Location: .");
    }
 
   }else if ($action == 'list_products'){
	$products = get_products();
	include('product_list.php');
   }

?>
