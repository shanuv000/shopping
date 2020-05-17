<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include 'include-css.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Employee</title>

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
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employee v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container">


                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Employee Code</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Father name</th>
                        <th>Department</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Date of Joining</th>
                        <th>Last Modified</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <? $query = mysqli_query($shanu->con, "select * from employee_details");
                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['emp_id']; ?>
                        <tr>
                            <td><?= $row['emp_code']; ?></td>
                            <td><?= $row['emp_username']; ?></td>
                            <td><?= $row['emp_name']; ?></td>
                            <td><?= $row['emp_f_name']; ?></td>
                            <td><?= $row['emp_department']; ?></td>
                            <td><?= $row['emp_mobile']; ?></td>
                            <td><?= $row['emp_email']; ?></td>
                            <td><?= $row['emp_dob']; ?></td>
                            <td><?= $row['emp_doj']; ?></td>
                            <td><?= $row['lastupdated']; ?></td>
                            <td><?= $row['emp_gender']; ?></td>
                            <td><?= $row['emp_status']; ?></td>
                            <td><?= $row['emp_remark']; ?></td>
                            <td>

                            </td>

                            <td>
                                <button onclick="confirms(<?= $id ?>);" class="btn btn-outline-danger"><i
                                            class="fas fa-trash-alt"></i>

                                </button>
                            </td>
                            <td>
                                <button class="btn btn-outline-success" onclick="update(<?= $id ?>)"><i
                                            class="fas fa-expand"></i>

                                </button>

                            </td>
                        </tr>
                    <? } ?>
                </table>



            </div>    <div id="ajaxResponseemployee">
            </div>
        </section>
        <script>
            function deletes(id) {
                $.ajax({
                    type: 'post',
                    url: 'ajax.php',
                    data: {id: id, employee_delete: ""},
                    success: function (data) {
                        document.location.reload();
                    }
                });
            }


            function confirms(id) {
                var r = confirm("Do you really want to delete");
                if (r == true) {
                    deletes(id);
                } else {
                    document.location.reload();
                }
            }


            function update(id) {
                $.ajax({
                    type: 'post',
                    url: 'ajax.php',
                    data: {idss: id, update_employee: ""},
                    success: function (data) {
                        $("#ajaxResponseemployee").html(data);
                        $("#modalEditemployee").modal();
                    }
                });
            }


        </script>


        <!--/. container-fluid -->

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
