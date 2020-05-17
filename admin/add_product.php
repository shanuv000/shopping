<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Add_product </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-collapse">
<div class="wrapper">
    <?php include "include-header.php"; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <div class="text-center"><h2>Add Product</h2></div>

                <form action="" method="post">
                    <div class="form-group">
                        <label>Code</label> <input type="text" id="code" name="code" placeholder="Enter Code"
                                                   class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Product-Name</label> <input type="text" id="p_name" name="p_name"
                                                           placeholder="Enter Product Name"
                                                           class="form-control">
                    </div>
                    <?php $cat_query = mysqli_query($shanu->con, "select * from category");

                    ?>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control" onchange='showsubcat(this.value)'>
                            <option value="Not selected">Select Category</option>
                            <?php while ($cat_row = mysqli_fetch_assoc($cat_query)) { ?>
                                <option value="<?php echo $cat_row['cat_id']; ?>"><?php echo $cat_row['cat_name']; ?>
                                </option>
                            <? } ?>
                        </select>
                    </div>
                    <div id="subCategory">

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
                        <label>Status</label> <select name="status" class="form-control">
                            <option value="Not selected">Select Status</option>
                            <option value="1">Available</option>
                            <option value="0">Unavailable</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Amount</label>  <input type="number" class="form-control" name="amount" id="amount">
                    </div>




                    <input type="submit" class="btn btn-success" name="submit" value="Add-Item">
                </form>


            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include 'include-footer.php' ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<?php include 'include-js.php' ?> </body>
</html>
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
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $sub_category = $_POST['subcat'];
    $query = "";
    if ($_POST['code'] == "") { ?>
        <script> alert('Field Cant be Empty') </script>
        <?

    } else {
        $connect = $shanu->con;
        $query_insert = "insert into product_details (pro_code,pro_name,pro_mrp,pro_tax,pro_rate,pro_status,pro_remark,pro_description,pro_amount,pro_category,pro_creation_date,pro_sub_category) value('$code','$p_name','$mrp','$tax','$rate','$status','$remarks','$Discrip','$amount','$category',now(),'$sub_category')";

        $query = mysqli_query($connect, $query_insert);
    }
    if ($query == true) {
        header("Location:add_product.php");
    } else {
        ?>
        <script>alert("Error query");</script>
        <?
    }

}

?>
<script>
    function showsubcat(id) {
        console.log(id);
        $.ajax({
            type: "post",
            url: 'ajax.php',
            data: {id: id, showsubcategory: ''},
            success: function (data) {
                $("#subCategory").html(data);

            }
        });

    }
</script>
