<?php

    include_once("../database/connection.inc.php");

    $useruuid = "b1985ec5-2960-4c1e-b598-fd8a1f620c5f";

    $sql = "SELECT u.screenname, m.productname, m.price, s.count, u.email, s.id FROM tb_shoppingcart s, tb_users u, tb_menuitems m 
                    WHERE s.user_id = ?
                    AND s.user_id = u.uuid
                    AND s.product_id = m.id";
    $data = array($useruuid);

    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

    $result = $stmt->fetchAll();

    print_r($result);


    foreach($result as $key=>$row) {
        echo $row['productname'];
        echo "<br />";
        echo $row['count'];
        echo '&nbsp;&nbsp;';
        echo $row['price'];
        echo $row['price'] * $row['count'];

        echo "<button id='".$row['id']."' onclick='aantalplus(this.id);'>+</button>";
        echo "<input type='text' enabled=false name='aantal' id='tekst" . $row['id'] . "' value='".$row['count'] ."' />";
        echo "<button id='".$row['id']."' onclick='aantalmin(this.id);'>-</button>";
    }
    ?>

    <script>
        function aantalplus(id) {
            //alert(id);
            var aantal = document.getElementById("tekst"+id).value;
            aantal++;
            document.getElementById("tekst"+id).value = aantal;
            addPlusToDb(id, aantal);
        }

        function aantalmin(id) {
           // alert(id);
            var aantal = document.getElementById("tekst"+id).value;
            aantal--;
            document.getElementById("tekst"+id).value = aantal;
        }

        function addPlusToDb(id, aantal) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {

            if (this.readyState == 4 && this.status == 200) {
               // alert(this.responseText);
                //document.getElementById("demo").innerHTML = this.responseText;

            }
            };
            xhttp.open("GET", "ShoppingcartTest/addproducttodb.php?id=" + id + "&count=" + aantal, true);

            xhttp.send();
        }

    </script>