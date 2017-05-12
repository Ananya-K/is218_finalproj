<?php include '../view/header.php'; ?>
<main>
    <h1>Register a Product</h1>
    
     <form action="index.php" method="post" id="register_product_form">
        <input type="hidden" name="action" value="register_product">

        <p>Enter email in order to register a product.</p>

        <div>
        <label>Enter Email:</label>
        <input type="text" name="email" 
        placeholder  = "johnsmith@email.com" />

        </div>
        <input type="submit" value="Login" />

        
     </form>	
</main>
<?php include '../view/footer.php'; ?>