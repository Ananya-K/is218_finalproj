<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM tech_products
              ORDER BY productCode';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();

    return $products;
}

function get_product($productCode) {
    global $db;
    $query = 'SELECT * FROM tech_products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(":productCode", $productCode);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($productCode) {
    global $db;
    $query = 'DELETE FROM tech_products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($productCode, $name, $version, $releasedate) {
    global $db;
    $query = 'INSERT INTO tech_products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:productCode, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);

echo $productCode;
echo $name;
echo $version;
echo $releasedate;

    $statement->bindValue(':productCode', $productCode);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releasedate);
    $statement->execute();
    $statement->closeCursor();
}
?>
