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

   if ($action == 'list_customers') {
    include('customer_list.php');
    }
   else if ($action == 'search_customer') {
     $lastName = filter_input(INPUT_POST, 'lastName');
    
      if ($lastName == NULL || $lastName == FALSE) {
          $error = "Invalid data. Check all fields and try again.";
          include('../errors/error.php');
      }

      else{    
      $customer = search_customer($lastName);
      include('customer_list.php');
     }   
    } 

?>
