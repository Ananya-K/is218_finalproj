<?php
require('../model/database.php');
require('../model/registration_db.php');
require('../model/customer_db.php');


$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'login';
    }
}

   if ($action == 'login') {
    include('login.php');
    }
   else if ($action == 'search_customer_email') {
     $email = filter_input(INPUT_POST, 'email');
     }
    
     /* if ($email == NULL || $email == FALSE) {
          $error = "Invalid data. Check all fields and try again.";
          include('../errors/error.php');
      } */

      else{    
      $customer = search_customer($email);
      include('customer_list.php');
     }   

?>