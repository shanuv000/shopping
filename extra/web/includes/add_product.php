<?php include '../connection.php' ?>
<?php include '../bootstrap.php'; ?>
<div class="container">
    <div class="text-center"><h2>Add Product</h2></div>

    <form action="" method="post">
        <div class="form-group">
            <label>Code</label> <input type="text" id="code" name="code" placeholder="Enter Code" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Name</label> <input type="text" id="p_name" name="p_name" placeholder="Enter Product Name"
                                               class="form-control">
        </div>
        <div class="form-group">
            <label>Mrp</label><input type="text" name="mrp" id="mrp" placeholder="Enter mrp" onchange="Change()" class="form-control">
        </div>
        <div class="form-group">
            <label>Rate</label><input type="text" name="rate" id="rate" placeholder="Enter rate" onchange="Change" class="form-control">
        </div>


        <div class="form-group">
            <label>Tax</label><input type="text" name="tax" id="tax" placeholder="Tax" class="form-control">
        </div>
        <label>Remarks</label> <textarea name="remarks" cols="20px" id="remarks" class="form-control">
</textarea>

        <label>Discription</label><textarea name="Discrip" cols="20px" id="discription" class="form-control">
</textarea>
        <div class="form-group">
            <label>Status</label><input type="text" id="status" name="status" placeholder="Enter status"
                                        class="form-control">
        </div>
        <div class="form-group">
            <label>Unit</label><input type="text" name="unit" id="unit" placeholder="Enter Unit" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Add-Item">
    </form>
</div>


<?php
$shanu = new MySqlDatabaseHelper();
if (isset($_POST['submit'])) {

    $code = $_POST['code'];
    $p_name = $_POST['p_name'];
    $mrp = $_POST['mrp'];
    $rate = $_POST['rate'];
    $tax = $_POST['tax'];
    $remarks = $_POST['remarks'];
    $tax = $_POST['tax'];
    $Discrip = $_POST['Discrip'];
    $status = $_POST['status'];
    $unit = $_POST['unit'];


    $query = mysqli_query($shanu->con, "insert into product (p_code,p_name,p_mrp,p_tax,p_rate,p_status,p_remarks,p_discription,p_unit,p_date) value ('$code','$p_name','$mrp','$tax','$rate','$status','$remarks','$Discrip','$unit',now())");


}


?>
<script>
    function Change(){
        var mrp=document.getElementById('mrp').value;
        console.log(mrp);
        document.write(mrp);

    }
</script>
