<?php include '../view/header.php'; ?>
<main>
    <h1>Update Customer</h1> 
    
    <form method='post' action='index.php' id='aligned'>
        <input type='hidden' name='action' value='update_customer'>
        <input type='hidden' name='customerID'
               value='1002'
        
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName"
                   value='Kelly'/>
        </div>
        <br>
        
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName"
                   value='Irvin'/>
        </div>
        <br>
        
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address"
                   value='PO Box 96621'/>
        </div>
        <br>
        
        <div>
            <label for="city">City:</label>
            <input type="text" name="city"
                   value='Washington'/>
        </div>
        <br>
        
        <div>
            <label for="state">State:</label>
            <input type="text" name="state"
                   value='DC'/>
        </div>
        <br>
        
        <div>
            <label for="postalCode">Postal Code:</label>
            <input type="text" name="postalCode"
                   value='20090'/>
        </div>
        <br>
        
        <div>
            <label for="countryCode">Country Code:</label>
            <input type="text" name="countryCode"
                   value='US'/>
        </div>
        <br>
        
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone"
                   value='(301) 555-8950'/>
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email"
                   value='kelly@example.com'/>
        </div>
        <br>
        
        <div>
            <label for="password">Password:</label>
            <input type="text" name="password"
                   value='sesame'/>
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