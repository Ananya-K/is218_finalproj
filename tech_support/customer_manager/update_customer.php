<?php include '../view/header.php'; ?>
<main>
    <h1>Update Customer</h1> 
    
    <form method='post' action='index.php' id='aligned'>
        <input type='hidden' name='action' value='update_customer'>
        <input type='hidden' name='customerID' value='<?php echo $customer['customerID']; ?>' />
        
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName"
                   value='<?php echo $customer['firstName']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName"
                   value='<?php echo $customer['lastName']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address"
                   value='<?php echo $customer['address']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="city">City:</label>
            <input type="text" name="city"
                   value='<?php echo $customer['city']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="state">State:</label>
            <input type="text" name="state"
                   value='<?php echo $customer['state']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="postalCode">Postal Code:</label>
            <input type="text" name="postalCode"
                   value='<?php echo $customer['postalCode']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="countryCode">Country Code:</label>
            <input type="text" name="countryCode"
                   value='<?php echo $customer['countryCode']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone"
                   value='<?php echo $customer['phone']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email"
                   value='<?php echo $customer['email']; ?>' />
        </div>
        <br>
        
        <div>
            <label for="password">Password:</label>
            <input type="text" name="password"
                   value='<?php echo $customer['password']; ?>' />
        </div>
        <br>
        
        <div>
            <label></label>
            <input type='submit' value='Update Customer'>
        </div>
    </form>
    
    <a href='.?action=customer_list'>Search Customers</a>
    
</main>
</main>
<?php include '../view/footer.php'; ?>