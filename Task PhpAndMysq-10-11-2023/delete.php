<?php

    require_once 'includes/connection.php';

    $id = $_GET['id'];
    $deleteEmp = "DELETE FROM employees WHERE id=$id";

    if(mysqli_query($conn , $deleteEmp)) {
        header('location:index.php');
    }
?>
