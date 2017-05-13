<?php include '../view/header.php'; ?>
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
<?php include '../view/footer.php'; ?>