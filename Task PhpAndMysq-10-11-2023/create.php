<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <!-- Navbar -->
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-secondary m-4 py-3 text-center">
            <h2> Create New Employee </h2>
        </div>
        <form action="store.php" method="post">
            <div class="form-group my-2">
                <label for="name">Employee Name</label>
                <input type="text" class="form-control py-2" id="name" 
                name="name">
            </div>
            <div class="form-group my-2">
                <label for="address">Employee Address</label>
                <input type="text" class="form-control py-2" 
                id="address" name="address">
            </div>
            <div class="form-group my-2">
                <label for="salary">Employee Salary</label>
                <input type="number" 
                class="form-control py-2" id="salary" name="salary">
            </div>
            <div class="form-group my-2">
                <label for="gender">Employee Gender</label>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female"
                 value="Female">
            </div>
            <input type="submit" value="Add Employee" 
            class="btn btn-primary my-2" name="add_employee">
        </form>
    </section>
    <!-- Footer -->
    <?php include_once 'includes/footer.php' ?>
</body>
</html>
