<?php
    $product_id = $_GET['id'];
    //$user_id = $_ESSION['user']{'id'};
    $user_id = 10;
    $count = $_GET['count'];

    //connection to db

    $sql = "INSERT INTO tb_shoppingcart (product_id, user_id, count) VALUES (?,?,?)";
    $data = array($product_id, $user_id, $count);
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);