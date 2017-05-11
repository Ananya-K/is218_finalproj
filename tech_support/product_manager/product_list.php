<?php include '../view/header.php'; ?>
<main>
    <h1>Product List</h1>
    <section>
        <!-- display a table of products -->
        
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
		<th>Version</th>
		<th>Release Date</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $p) : ?>
            <tr>
                <td><?php echo $p['productCode']; ?></td>
                <td><?php echo $p['name']; ?></td>
                <td><?php echo $p['version']; ?></td>
                <td><?php echo $p['releaseDate']; ?></td>
	       <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="productCode"
                    	   value="<?php echo $p['productCode']; ?>">
                    <input type="hidden" name="name"
                    	   value="<?php echo $p['name']; ?>">
                    <input type="hidden" name="version"
                           value="<?php echo $p['version']; ?>">
                    <input type="hidden" name="releaseDate"
                           value="<?php echo $p['releaseDate']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>
    </section>
</main>
<?php include '../view/footer.php'; ?>
