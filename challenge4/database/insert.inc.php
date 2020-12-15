<?php
    $sql = "INSERT INTO tb_menuitems (productname, price, description, language, type) 
                VALUES ('$title', '$price', '$description', '$language', '$type')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    