<?php


function get_product_code($email){
    global $db;
    $query = 'SELECT registrations.productCode, customers.email
      FROM registrations
      INNER JOIN customers ON registrations.customerID = customers.customerID';
    $statement = $db->prepare($query);
   // $statement->bindValue(":email", $email);
    $statement->execute();
    $customer = $statement->fetch();
    return $customer;
}


?>