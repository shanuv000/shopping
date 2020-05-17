<?php
include 'connection.php';
$query = mysqli_query($shanu->con, "select * from state") ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Address Book</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .text-center {
            color: hotpink;
        }

        ;
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Address Book</h2>
    <form method="post" action="">
        <div class="form-group">
            <label>Locality</label>
            <input class="form-control" type="text" placeholder="Locality" name="locality">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" cols="20" row="30" class="form-control" placeholder="Address"></textarea>
        </div>
        <div class="form-group">
            <label>Pin Code</label>
            <input class="form-control" type="number" placeholder="Pin" name="pin">
        </div>
        <div class="form-group">
            <label>Landmark</label>
            <input class="form-control" type="text" placeholder="Landmark" name="landmark">
        </div>
        <div class="form-group">
            <label>State</label>
            <select name="state" class="form-control">

                <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                    <option value="<?= $row['state']; ?>"><?php echo $row['state']; ?> </option>
                <? } ?>
            </select>
        </div>
        <div class="form-group">
            <label>City</label>
            <input class="form-control" name="city" placeholder="city" type="text">
        </div>


        <center>
            <input class="btn btn-success" name="submit" value="submit" type="submit">
        </center>
    </form>


</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $locality = $_POST['locality'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $landmark = $_POST['landmark'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $queries = mysqli_query($shanu->con, "insert into cus_address_book(pin, locality, address, city, state, landmark) values ('$pin','$locality','$address','$city','$state','$landmark')");
    if ($query) {
        header("Location:addaddressBook.php");
    }
}
?>
