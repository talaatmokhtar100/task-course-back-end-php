<?php
require_once 'includes/connection.php';
$id = $_GET['id'];

$selectedEmp = "SELECT * FROM employees WHERE id=$id";
$res = mysqli_query($conn, $selectedEmp);
$emp = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-success m-4 py-3 text-center">
            <h2>Edit Employee</h2>
        </div>
        <form action="update.php?id=<?php echo $emp['id'] ?>" method="post">
            <div class="form-group my-2">
                <label for="name">Employee Name</label>
                <input type="text" class="form-control py-2" id="name" name="name" value="<?php echo $emp['name'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="address">Employee Address</label>
                <input type="text" class="form-control py-2" id="address" name="address" value="<?php echo $emp['address'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="salary">Employee Salary</label>
                <input type="number" class="form-control py-2" id="salary" name="salary" value="<?php echo $emp['salary'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="bonus">Employee Bonus</label>
                <input type="number" class="form-control py-2" id="bonus" name="bonus" value="<?php echo $emp['bonus'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="gender">Employee Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php echo $emp['gender'] == "Male" ? "checked" : "" ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php echo $emp['gender'] == "Female" ? "checked" : "" ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <input type="submit" value="Edit Employee" class="btn btn-success my-2" name="edit_employee">
        </form>
    </section>
    <!-- Footer -->
    <?php include_once 'includes/footer.php' ?>
</body>

</html>
