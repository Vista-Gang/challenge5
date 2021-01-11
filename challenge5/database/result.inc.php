<?php
    foreach($result as $key => $row) {
        echo "<h1 class='ietsmoois'>" . $row['productname'] . "</h1>"; //vul hier een bestaande kolomnaam uit de database in
        echo "€ " . $row['price'] . "<br />"; 
        echo $row['description']; 
        echo "<br /><br />";
    }