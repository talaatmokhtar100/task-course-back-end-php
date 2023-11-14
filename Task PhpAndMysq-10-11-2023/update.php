<?php
    require_once 'includes/connection.php';
    $id = $_GET['id'];

    if(isset($_POST['edit_employee'])) {
        $name = mysqli_real_escape_string($conn , $_POST['name']);
        $address  = mysqli_real_escape_string($conn , $_POST['address']);
        $salary = mysqli_real_escape_string($conn , $_POST['salary']);
        $bonus = mysqli_real_escape_string($conn , $_POST['bonus']);
        $gender = mysqli_real_escape_string($conn , $_POST['gender']);
        $salary_after_bonus = mysqli_real_escape_string($conn , $_POST['salary_after_bonus']);
        $annual_salary = mysqli_real_escape_string($conn , $_POST['annual_salary']);

        $sql = "UPDATE employees SET name='$name',address='$address',salary='$salary',bonus='$bonus',gender='$gender',salary_after_bonus='$salary_after_bonus',annual_salary='$annual_salary'
        WHERE id=$id";
        
        if(mysqli_query($conn , $sql)){
            header('location:index.php');
        } else {
            header('location:edit.php');
        }
    }
?>
