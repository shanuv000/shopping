<?php
include 'connection.php';
include 'bootstrap.php'; ?>
<div class="text-center"><h2>Add Brand</h2></div>
<div class="container-fluid">
    <form action="" method="post">
        <div class="form-group">
            <label>Brand-Code</label> <input type="text" id="code" name="code" placeholder="Enter Code"
                                             class="form-control">
        </div>
        <div class="form-group">
            <label>Brand Name</label> <input type="text" id="brand_name" name="brand_name"
                                             placeholder="Enter Brand Name"
                                             class="form-control">
        </div>
        <div class="form-group">
            <label>Contact</label><input type="text" name="mobile" id="mobile" placeholder="Enter mobile"
                                         class="form-control">
        </div>

        <div class="form-group">

            <label>Status</label>
            <select name="status" class="form-control">
                <option value="-1" selected>Select Status</option>
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>


        <div class="form-group">
            <label>
                Address</label> <textarea name="address" cols="20px" id="address" class="form-control"
                                          placeholder="Remarks">
</textarea>

        </div>


        <center>
            <input type="submit" class="btn btn-success" name="submit" value="Add-Item"></center>
    </form>

</div>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['brand_name'];
    $status = $_POST['status'];
    $date = $_POST['brand_date'];
    $mobile = $_POST['mobile'];
    $code = $_POST['code'];
    $address = $_POST['address'];

    $query = mysqli_query($shanu->con, "
insert into brand_details(bra_name, bra_status, bra_date, mobile, bra_code, bra_address) value ('$name','$status',now(),'$mobile','$code','$address')");
    header("Location:add_brand.php");

}


?>

