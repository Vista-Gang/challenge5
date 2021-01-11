<?php

    if(isset($_POST['frmgegevens'])) {
        include_once("connection.inc.php");
        include_once("collect.inc.php");
        include_once("insert.inc.php");
    }   else {
            include_once("form.inc.php");
    }
    include_once("connection.inc.php");
    include_once("selectfood.inc.php");
    include_once("result.inc.php");