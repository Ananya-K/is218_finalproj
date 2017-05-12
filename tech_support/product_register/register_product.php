<?php include '../view/header.php'; ?>
<main>
    <h1>Register a Product</h1>
    
     <form action="index.php" method="post" id="register_product_form">
        <input type="hidden" name="action" value="register_product">

        <p>Enter email in order to register a product.</p>

        <div>
        <label>Customer</label>
        <td><?php echo $customer['firstName' . ' ' . 'lastName']; ?></td>
        </div>
        
        <div> 
        <label>Select Product: </label>
        
        <!-- <select name ="product">
            <option value="visa">Visa</option>
            <option value="mastercard">MasterCard</option>
            <option value="discover">Discover</option> --> 
            
        </div>
        
              <input type="submit" value="Register Product" />
        
     </form>	
</main>
<?php include '../view/footer.php'; ?>