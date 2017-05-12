<?php include '../view/header.php'; ?>
<main>
    <h1>Customer Search</h1>
    
     <form action="index.php" method="post" id="search_customer_form">
        <input type="hidden" name="action" value="search_customer">

        <div>
        <label>Last Name:</label>
        <input type="text" name="lastName" 
        placeholder  = "Enter Last Name" />

        </div>
        <input type="submit" value="Search" />
        <br>
     </form>	
     
     <h1>Results</h1>
     <p> Enter a last name </p>
     
     <table>
     <tr>
     <th>Name</th>
     <th>Email</th>
     <th>City</th>
     </tr>
     
   <?php foreach ($customer as $c) :?>
     <tr>
         <td><?php echo $c['firstName']; ?></td>
         <td><?php echo $c['email']; ?></td>  
         <td><?php echo $c['city']; ?></td>
         
         <td><form action="." method="post">
         <input type="hidden" name="action" value="search_customer">
         <input type="hidden" name="firstName" value="<?php echo $c['firstName']; ?>">
         <input type="hidden" name="email" value="<?php echo $c['email']; ?>">
         <input type="hidden" name="city" value="<?php echo $c['city']; ?>">
         
         <input type="submit" value="Select">
         
     </form></td>
           </tr>
     <?php endforeach; ?>
     </table>
      
</main>
<?php include '../view/footer.php'; ?>