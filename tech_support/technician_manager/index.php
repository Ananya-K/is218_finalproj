<?php
require('../model/database.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action === NULL) {

    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_technicians';
    }
}

if ($action == 'list_technicians'){
    $techies == get_all_techies();
    include('techie_list.php');
}

else if ($action == 'delete_technicians'){
    $techID = filter_input(INPUT_POST, 'techID', 
            FILTER_VALIDATE_INT);
            include('../errors/error.php');
    	delete_techie($techID);
}

else if ($action == 'show_add_form'){
    $techies = get_all_techies();
    include('techie_add.php');
}

else if ($action == 'add_techie'){
    $techID = filter_input(INPUT_POST, 'techId');
    $fname  = filter_input(INPUT_POST, 'firstName');
    $lname  = filter_input(INPUT_POST, 'lastName');
    $email  = filter_input(INPUT_POST, 'email');
    $phone  = filter_input(INPUT_POST, 'phone');
    $pass   = filter_input(INPUT_POST, 'password');

    if($techID == NULL || $techID == FALSE || $fname == NULL || $fname == FALSE || $lname == NULL || $lname == FALSE || $email == NULL  || $email == FALSE || $phone == NULL || $phone == FALSE || $pass == NULL || $pass == FALSE) {
 	
	$error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
        }     
    else { 
        add_techie($techID, $fname, $lname, $email, $phone, $pass);
	header("Location: .");
        }
}
    else if ($action == 'list_technicians'){
        $techies == get_all_techies();
        include('techie_list.php');
    }

    
?>
