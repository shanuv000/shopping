<?php include 'connection.php';
include 'bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <title>AdminLTE | Product</title>

    <!-- Font Awesome Icons -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="dist/css/adminlte.min.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper ">

    <!-- Navbar -->


    <?php include "includes/header.php"; ?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <?php include "includes/sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <div class="col-sm-12">

            <div class="container">
                <div class="text-center"><h2>Add Product</h2></div>

                <form action="" method="post">
                    <div class="form-group">
                        <label>Code</label> <input type="text" id="code" name="code" placeholder="Enter Code"
                                                   class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Product Name</label> <input type="text" id="p_name" name="p_name"
                                                           placeholder="Enter Product Name"
                                                           class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mrp</label><input type="text" name="mrp" id="mrp" placeholder="Enter mrp"
                                                 onchange="Change()"
                                                 class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rate</label><input type="text" name="rate" id="rate" placeholder="Enter rate"
                                                  onchange="Change" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Tax</label><input type="text" name="tax" id="tax" placeholder="Tax" class="form-control">
                    </div>
                    <label>Remarks</label> <textarea name="remarks" cols="20px" id="remarks" class="form-control">
</textarea>

                    <label>Discription</label><textarea name="Discrip" cols="20px" id="discription"
                                                        class="form-control">
</textarea>
                    <div class="form-group">
                        <label>Status</label><input type="text" id="status" name="status" placeholder="Enter status"
                                                    class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Unit</label><input type="text" name="" id="unit" placeholder="Enter Unit"
                                                  class="form-control">
                    </div>

                    <div class="form-group">
                        <select name="unit" class="form-control">
                            <option value="0">select Value</option>
                            <option value="kg">kilo-Gram</option>
                            <option value="lit">litre</option>
                            <option value="pieces">Quantity</option>

                        </select>
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
                $query = "";
                if ($_POST['code'] == "") { ?>
                    <script> alert('Field Cant be Empty') </script>
                    <?

                } else {
                    $query = mysqli_query($shanu->con, "insert into product_details (pro_code,pro_name,pro_mrp,pro_tax,pro_rate,pro_status,pro_remark,pro_description,pro_unit,pro_creation_date) value ('$code','$p_name','$mrp','$tax','$rate','$status','$remarks','$Discrip','$unit',now())");
                }
                if ($query == true) {


                    header("Location:add_product.php");
                }

            }

            ?>


        </div>


        <div class="col-sm-12">
<?php include "showproduct.php";?>
        </div>
    </div>


    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    <?php include "includes/footer.php"; ?>
