<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Show Brand </title>

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


                <table class="table table-hover table-bordered">

                    <tr>
                        <th>Sr.no</th>
                        <th>
                            Brand Name
                        </th>
                        <th>
                            Status
                        </th>

                        <th>
                            mobile
                        </th>
                        <th>
                            code
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            date
                        </th>
                        <th>Last Updated</th>

                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php $query = mysqli_query($shanu->con, "select * from brand_details");
                    $row = mysqli_fetch_assoc($query);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) {
                        $name = $row['bra_name'];
                        $status = $row['bra_status'];
                        $date = $row['bra_date'];
                        $mobile = $row['mobile'];
                        $code = $row['bra_code'];
                        $address = $row['bra_address'];
                        $lastUpdate = $row['lastupdated'];

                        $id = $row['bra_id'];
                        ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <?= $name; ?>
                            </td>
                            <td>
                                <?

                                if ($status == 0) {
                                    echo "Not Available";
                                } else if ($status == 1) {
                                    echo "Available";
                                } else if ($status == -1) {
                                    echo "Not selected";
                                }; ?>
                            </td>

                            <td>
                                <?= $mobile; ?>
                            </td>
                            <td>
                                <?= $code; ?>
                            </td>
                            <td>
                                <?= $address; ?>
                            </td>
                            <td>
                                <?= $date ?>
                            </td>
                            <td><?= $lastUpdate ?></td>
                            <td>
                                <button onclick="confirms(<?= $id ?>)" name="sub" id="delete"
                                        class="btn btn-outline-danger">
                                    <i
                                            class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                            <td>
                                <button onclick="fun(<?= $id ?>)" name="edit" id="edit" class="btn btn-outline-success">
                                    <i
                                            class="fas fa-expand"></i>
                                </button>
                            </td>
                        </tr>
                        <? $i++;
                    } ?>
                </table>

            </div><!--/. container-fluid -->
            <div id="ajaxResponse"></div>
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

<script>

    function confirms(id) {
        var r = confirm("Are you sure you really want to delete id " + id + "?");
        if (r == true) {
            shanu(id);
        } else {
            document.location.reload();
        }
    }


    function shanu(id) {
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {idss: id, deletes: ""},
            success: function f(data) {
                document.location.reload();
            }
        });
    }


    function fun(id) {
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {idss: id, updates: ""},
            success: function (data) {
                $("#ajaxResponse").html(data);
                $("#modalEditBrand").modal();

            }
        });
    }
</script>