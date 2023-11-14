<?php
require_once 'includes/connection.php';

$id = $_GET['id'];

$selectedEmp = "SELECT * FROM employees WHERE id=$id";
$result = mysqli_query($conn, $selectedEmp);
$emp = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 contaier w-50 mx-auto text-center py-5 rounded shadow text-dark bg-light border">
        <h2>Employee Name: <?php echo $emp['name'] ?></h2>
        <h3>Salary: <?php echo $emp['salary'] ?> </h3>
        <h3>Bonus: <?php echo $emp['bonus'] ?> </h3>
        <h3>Salary After Bonus: <?php echo $emp['salary_after_bonus'] ?> </h3>
        <h3>Annual Salary: <?php echo $emp['annual_salary'] ?> </h3>
        <h3>Address: <?php echo $emp['address'] ?> </h3>
        <a href="index.php" class="mt-2">Return to home</a>
    </section>
    <?php include_once 'includes/footer.php' ?>
</body>

</html>
