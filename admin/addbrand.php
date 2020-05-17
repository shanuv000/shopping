<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
if (isset($_POST['submit'])) {
    $name = $_POST['brand_name'];
    $status = $_POST['status'];
    $mobile = $_POST['mobile'];
    $code = $_POST['code'];
    $address = $_POST['address'];

    $query = mysqli_query($shanu->con, "
insert into brand_details(bra_name, bra_status, bra_date, mobile, bra_code, bra_address) value ('$name','$status',now(),'$mobile','$code','$address')");

}
?>
<script>
</script>
