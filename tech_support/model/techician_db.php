<?php


//get all techies
function get_all_techies(){
    global $db;
    $query     = 'SELECT * FROM technicians
	          ORDER BY techID';
    $statement = $db->prepare($query);
    $statement ->execute();
    $techies   = $statement->fetchAll();
    $statement ->closeCursor();

    return $techies;
}


//get techie
function get_techie($techID){
    global $db;
    $query = 'SELECT * FROM technicians
	      WHERE techID = :techID';
    $statement = $db->prepare($query);
    $statement ->bindValue(":techID", $techID);
    $statement ->execute();
    $techie    = $statement->fetch();
    $statement ->closeCursor();
    return $techie;
}    

//delete techie
function delete_technicians($techID) {
    global $db;
    $query     = 'DELETE FROM technicians
                  WHERE techID = :techID';
    $statement = $db->prepare($query);
    $statement ->bindValue(':techID', $techID);
    $statement ->execute();
    $statement ->closeCursor();
}


//add techie
function add_technicians( $fname, $lname, $email, $phone, $pass){
    global $db;
    $query = 'INSERT INTO technicians
	(firstName, lastName, email, phone, password)
	      VALUES
	(:firstName, :lastName, :email, :phone, :password)';
    $statement = $db->prepare($query);

    $statement->bindValue(':firstName', $fname);
    $statement->bindValue(':lastName', $lname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $pass);
    $statement->execute();
    $statement->closeCursor();


}

?>
