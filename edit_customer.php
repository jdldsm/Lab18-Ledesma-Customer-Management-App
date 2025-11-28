<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE cus_code = '$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $initial = $_POST['initial'];
    $area = $_POST['area'];
    $phone = $_POST['phone'];
    $balance = $_POST['balance'];

    $sql = "UPDATE customer SET
            cus_lname = '$lname',
            cus_fname = '$fname',
            cus_initial = '$initial',
            cus_areacode = '$area',
            cus_phone = '$phone',
            cus_balance = '$balance'
            WHERE cus_code = '$id'";

    mysqli_query($conn, $sql);
    header("Location: customers.php");
}
?>

<!DOCTYPE html>
<html>
<?php include 'component/head.php'; ?>
<body>

<div class="container mt-4">
    <h2>Edit Customer</h2>

    <form method="POST" class="mt-3">

        <label>Customer Code (cannot edit)</label>
        <input class="form-control" value="<?php echo $data['cus_code']; ?>" disabled>

        <label>Lastname</label>
        <input class="form-control" name="lname" value="<?php echo $data['cus_lname']; ?>">

        <label>Firstname</label>
        <input class="form-control" name="fname" value="<?php echo $data['cus_fname']; ?>">

        <label>Initial</label>
        <input class="form-control" name="initial" value="<?php echo $data['cus_initial']; ?>">

        <label>Area Code</label>
        <input class="form-control" name="area" value="<?php echo $data['cus_areacode']; ?>">

        <label>Phone</label>
        <input class="form-control" name="phone" value="<?php echo $data['cus_phone']; ?>">

        <label>Balance</label>
        <input class="form-control" name="balance" value="<?php echo $data['cus_balance']; ?>">

        <button class="btn btn-success mt-3" name="update">Update Customer</button>
    </form>

</div>

</body>
</html>
