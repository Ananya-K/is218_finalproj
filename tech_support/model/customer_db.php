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
//get customer
function get_customer($lastName) {
    global $db;
    $query = 'SELECT * FROM customers
              WHERE lastName = :lastName';
    $statement = $db->prepare($query);
    $statement->bindValue(":lastName", $lastName);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
}

//search for a customer

function show_customer(){
    global $db;
    $query = 'SELECT firstName, email, city
             FROM customers
             WHERE lastName = :lastName';
    $statement = $db->prepare($query);
    $statement->bindValue(":lastName", $lastName);
    $statement->execute();
    $customer = $statement->fetch();
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

?>
