<?php
require('../model/database.php');
require('../model/incidents_db.php'); 
require('../model/customer_db.php');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
} 

if ($action == 'login') {
  include ('login.php');
      
?>












/*<?php include '../view/header.php'; ?>


<main>
    <h1>Select Customer</h1>
    
     <form action="index.php" method="post" id="create_incident_form">
        <input type="hidden" name="action" value="create_incident">

        <p>Please enter customer email to get started.</p>

        <div>
        <label>Enter Email:</label>
        <input type="text" name="email" 
        placeholder  = "johnsmith@email.com" />

        </div>
        <input type="submit" value="Get Customer" />

        
     </form>	
</main>
<?php include '../view/footer.php'; ?>*/