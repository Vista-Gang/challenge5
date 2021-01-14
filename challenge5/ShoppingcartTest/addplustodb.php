<?php

$product_id = $_GET['id'];

        include_once("../database/connection.inc.php");
        include_once("showshoppingcart.php");

        $sql = "UPDATE tb_shoppingcart SET count = $aantal WHERE id= $id";
        $data = array($product_id, $user_id, $count);
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
