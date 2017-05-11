<?php include '../view/header.php'; ?>
<main>
    <h1>List of Technicians</h1>
    <section>
        <!-- display a table of products -->
       <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
		<th>E-Mail</th>
		<th>Phone Number</th>
		<th>Password</th>
                <th>&nbsp;</th>
            </tr>	 
             <?php foreach ($techies as $t) : ?>       
           <tr>
                <td><?php echo $t['firstName']; ?></td>
                <td><?php echo $t['lastName']; ?></td>
                <td><?php echo $t['email']; ?></td>
                <td><?php echo $t['phone']; ?></td>
                <td><?php echo $t['pass']; ?></td>
	       <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="firstName"
                    	   value="<?php echo $t['firstName']; ?>">
                    <input type="hidden" name="lastName"
                    	   value="<?php echo $t['lastName']; ?>">
                    <input type="hidden" name="email"
                           value="<?php echo $t['email']; ?>">
                    <input type="hidden" name="phone"
                           value="<?php echo $t['phone']; ?>">
                    <input type="hidden" name="pass"
                           value="<?php echo $t['pass']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Technician</a></p>
    </section>
</main>
<?php include '../view/footer.php'; ?>
