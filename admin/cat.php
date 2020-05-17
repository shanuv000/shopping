<? include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?><?php

    if (isset($_POST['submiit'])) {
        $cat = $_POST['category'];

        $query = mysqli_query($shanu->con, "insert into category(cat_name,date) value('$cat',now())");
        header('Location:category.php');
    }


    $select_query = mysqli_query($shanu->con, "select * from category");
    $row = mysqli_fetch_assoc($select_query);


    ?>
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
            <div class="container">

                <form method="post">
                    <div class="form-group">
                        <label>Add Category</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submiit" class="btn btn-success">
                    </div>
                </form>


                <h2>
                    Sub Category
                </h2>
                <form method="post">
                    <div class="form-group">
                        <select name="view">
                            <? while ($row = mysqli_fetch_assoc($select_query)) {
                                $cat_id = $row['cat_id']; ?>

                                <option value="<?= $cat_id ?>"><?= $row['cat_name']; ?></option>
                            <? } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="subcat" placeholder="Enter Sub Category" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="subiis" value="Add-Sub-Cat" class="btn btn-success">
                    </div>
                </form>


            </div><!--/. container-fluid -->
            <?php
            if (isset($_POST['subiis'])) {
                $view_cate = $_POST['view'];
                $subcat = $_POST['subcat'];

                $querys = mysqli_query($shanu->con, "insert into sub_category(cat_id, sub_cat_name, subdate) value('$view_cate','$subcat',now())");
            }

            ?>
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
