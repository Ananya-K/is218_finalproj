<?php
function get_all_customers() {
    global $db;
    $query = 'SELECT * FROM customers
              ORDER BY customerID';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();

    return $customers;
}


//search for a customer

function search_customer($lastName){
    global $db;
    $query = 'SELECT firstName, lastName, email, city
             FROM customers
             WHERE lastName = :lastName';
    $statement = $db->prepare($query);
    $statement->bindValue(":lastName", $lastName);
    $statement->execute();
    $customer = $statement->fetchAll();
    return $customer;
}

//update customer data

function update(){
    global $db;
    $query = 'UPDATE customers
             SET firstName = :firstName, lastName = :lastName, address = :address, city = :city, state = :state, postalCode = :postalCode, countryCode = :counrtyCode, phone = :phone, email = :email, password = :password
             WHERE cutomerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(":firstName", $firstName);
    $statement->bindValue(":lastName", $lastName);
    $statement->bindValue(":address", $address);
    $statement->bindValue(":city", $city);
    $statement->bindValue(":state", $state);
    $statement->bindValue(":postalCode", $postalCode);
    $statement->bindValue(":countryCode", $countryCode);
    $statement->bindValue(":phone", $phone);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":password", $password);
    $statement->bindValue(":customerID", $customerID);
    $statement->execute();
    $statement->closeCursor();         
}

function customer_email($email){
    global $db;
    $query = 'SELECT registrations.productCode, customers.email
      FROM registrations
      INNER JOIN customers ON registrations.customerID = customers.customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $customer = $statement->fetch();
    return $customer;
}

?>
