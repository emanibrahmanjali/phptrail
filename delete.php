<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `data` where id=$id";
        $conn->query($sql);
    }
    header('location: /test/index.php');
    exit;
?>