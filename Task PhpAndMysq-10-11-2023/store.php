<?php
require_once "includes/connection.php";

if (isset($_POST['add_employee'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address  = mysqli_real_escape_string($conn, $_POST['address']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $salary_after_bonus = $salary + $bonus;
    $annual_salary = $salary_after_bonus * 12;

    $insertEmp = "INSERT INTO employees(name , address , salary , bonus , salary_after_bonus , annual_salary , gender)
    VALUES('$name' , '$address' , '$salary' , '$bonus' , '$salary_after_bonus' , '$annual_salary' , '$gender')";

    if (mysqli_query($conn, $insertEmp)) {
        header('location:index.php');
    } else {
        header('location:create.php');
    }
}
?>
