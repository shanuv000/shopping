<?php include "connection.php"; ?>

<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Show Product</title>

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
                        <h1 class="m-0 text-dark">Product Details</h1>
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


                <?php
                $shanu = new MySqlDatabaseHelper();
                $query = mysqli_query($shanu->con, "select * from product_details");
                $row = mysqli_fetch_assoc($query);

                ?>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th> S.No</th>
                        <th>
                            code
                        </th>
                        <th>
                            Product
                            Name
                        </th>
                        <th> Mrp
                        </th>
                        <th> Rate
                        </th>
                        <th> Tax
                        </th>
                        <th> Remarks
                        </th>
                        <th>
                            Discription
                        </th>
                        <th> Status</th>
                        <th> Available Pieces</th>
                        <th>Image</th>
                        <th> Date</th>
                        <th>
                            Delete
                        </th>

                    </tr>

                    <? $i = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($query)) {

                        $id = $row['pro_id'];

                        $image_query = mysqli_query($shanu->con, "select * from product_image where product_id='$id'");
                        $show = mysqli_fetch_assoc($image_query);
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['pro_code']; ?></td>
                            <td> <?= $row['pro_name']; ?></td>
                            <td><?= $row['pro_mrp']; ?></td>
                            <td><?= $row['pro_rate']; ?></td>
                            <td><?= $row['pro_tax']; ?></td>
                            <td><?= $row['pro_remark']; ?></td>
                            <td><?= $row['pro_description']; ?></td>

                            <td><?php if ($row['pro_status'] == 1) {
                                    echo "Available";
                                } else {
                                    echo "Unavailable";
                                }; ?></td>
                            <td><?= $row['pro_amount']; ?> pieces</td>
                            <td><img src="../images/<?= $show['pro_img']; ?> " height="40px" width="70px"></td>
                            <td><?= $row['pro_creation_date']; ?></td>
                            <td>
                                <button onclick="confirms(<?= $id; ?>)"><i class="fas fa-trash-alt"> </i></button>
                            </td>
                        </tr>
                        <? $i++;
                    } ?>
                </table>


                <script>
                    function shanu(id) {
                        $.ajax({
                            type: 'post',
                            data: {id: id},
                            url: 'deleteProduct.php',
                            success: function f(data) {
                                document.location.reload();
                            }
                        });
                    }


                    function confirms(id) {
                        var r = confirm("Do you really want to delete");
                        if (r == true) {
                            shanu(id);
                            alert("id " + id + " deleted");
                        } else {
                            document.location.reload();
                        }
                    }

                </script>


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
