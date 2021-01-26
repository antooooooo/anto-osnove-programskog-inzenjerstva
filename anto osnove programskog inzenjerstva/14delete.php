<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include "connection.php";

    if(!empty($_GET) && isset($_GET['id']) && is_int(intval($_GET['id']))){
        $sql = "UPDATE clanak SET vidljiv = 0 WHERE id_clanka = " . $_GET['id'] . ";";

        mysqli_query($conn, $sql);

        header("Location: 13cms.php");
        die();
    }
?>