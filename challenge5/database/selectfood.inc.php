<?php
    $sql = "SELECT * FROM tb_menuitems WHERE type = 'food' AND language = 'dutch' ORDER BY productname ASC";
    include_once("connection.inc.php");

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
                $id = $row['id'];
                echo "<h3 class='product_name menutext'>" . $row['productname'] . "</h3>"; //vul hier een bestaande kolomnaam uit de database in
                echo "<h4 class='product__price'>" . $row['price'] . "<br />"; 
                echo $row['description']; 
                echo "<button id='$id' class='btn btn--primary' data-action='ADD_TO_CART'>Add To Cart</button>";
                echo "<br /><br />";
            }