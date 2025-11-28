<?php
include 'config.php';

if (isset($_POST['save'])) {
    $code = $_POST['code'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $initial = $_POST['initial'];
    $area = $_POST['area'];
    $phone = $_POST['phone'];
    $balance = $_POST['balance'];

    $sql = "INSERT INTO customer 
           (cus_code, cus_lname, cus_fname, cus_initial, cus_areacode, cus_phone, cus_balance)
            VALUES 
           ('$code', '$lname', '$fname', '$initial', '$area', '$phone', '$balance')";

    mysqli_query($conn, $sql);
    header("Location: customers.php");
}
?>

<!DOCTYPE html>
<html>
<?php include 'component/head.php'; ?>
<body>

<div class="container mt-4">
    <h2>Add Customer</h2>

    <form method="POST" class="mt-3">

        <label>Customer Code</label>
        <input class="form-control" name="code" required>

        <label>Lastname</label>
        <input class="form-control" name="lname" required>

        <label>Firstname</label>
        <input class="form-control" name="fname" required>

        <label>Initial</label>
        <input class="form-control" name="initial">

        <label>Area Code</label>
        <input class="form-control" name="area">

        <label>Phone Number</label>
        <input class="form-control" name="phone">

        <label>Balance</label>
        <input class="form-control" name="balance" value="0">

        <button class="btn btn-primary mt-3" name="save">Save Customer</button>
    </form>
</div>

</body>
</html>
