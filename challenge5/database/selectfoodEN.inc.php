<?php
    $sql = "SELECT * FROM tb_menuitems WHERE type = 'food' AND language = 'english'";
    include_once("connection.inc.php");

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
                echo "<h3 class='menutext'>" . $row['productname'] . "</h3>"; //vul hier een bestaande kolomnaam uit de database in
                echo "€ " . $row['price'] . "<br />"; 
                echo $row['description']; 
                echo "<br /><br />";
            }