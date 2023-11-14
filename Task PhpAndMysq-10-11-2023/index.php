<?php require_once 'includes/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <!-- Navbar -->
    <?php include_once 'includes/navbar.php' ?>

    <section class="my-5 container text-center">
        <table class="table table-bordered">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Employee Address</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Salary After Bonus</th>
                    <th>Annual Salary</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM employees";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><?php echo $row['bonus'] ?></td>
                        <td><?php echo $row['salary_after_bonus'] ?></td>
                        <td><?php echo $row['annual_salary'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info mx-1">Show</a>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-success mx-1">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning mx-1">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <!-- Footer -->
    <?php include_once 'includes/footer.php' ?>
</body>

</html>
