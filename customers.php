<?php
$page = 'Customers';
include 'config.php';
?>
<!doctype html>
<html lang="en">
<?php include 'component/head.php'; ?>
<body>

<?php include 'component/nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php include 'component/sidebar.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Customers</h1>
                <a href="add_customer.php" class="btn btn-primary">Add Customer</a>
            </div>

            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Area Code</th>
                        <th>Phone</th>
                        <th>Balance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM customer");

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['cus_code']}</td>";
                    echo "<td>{$row['cus_fname']}</td>";
                    echo "<td>{$row['cus_lname']}</td>";
                    echo "<td>{$row['cus_areacode']}</td>";
                    echo "<td>{$row['cus_phone']}</td>";
                    echo "<td>{$row['cus_balance']}</td>";
                    echo "<td>
                        <a class='btn btn-warning btn-sm' href='edit_customer.php?id={$row['cus_code']}'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete_customer.php?id={$row['cus_code']}' onclick='return confirm(\"Delete this customer?\");'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>

        </main>
    </div>
</div>

</body>
</html>
