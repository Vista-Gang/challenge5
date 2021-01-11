<?php
    $sql = "SELECT * FROM tb_faq WHERE lang ='en' ORDER BY date DESC";
    include_once("connection.inc.php");

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
                echo "<h3 class='faq'>" . $row['question'] . "</h3>" . "</br>"; //vul hier een bestaande kolomnaam uit de database in
                echo "<button class='buttons'>Like</button>";
            }