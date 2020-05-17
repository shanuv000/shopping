<?php include 'connection.php';
include 'bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <title>AdminLTE | Employee Details</title>

    <!-- Font Awesome Icons -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="dist/css/adminlte.min.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper ">
    <div class="col-md-8">
    <!-- Navbar -->


    <?php include "includes/header.php"; ?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <?php include "includes/sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">



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
        <th>Gender</th>
        <th>Status</th>
        <th>Remarks</th>

    </tr>
    <? $query = mysqli_query($shanu->con, "select * from employee_details");
    while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>

            <td><?=$row['emp_code'];?></td>
            <td><?=$row['emp_username'];?></td>
            <td><?=$row['emp_name'];?></td>
            <td><?=$row['emp_f_name'];?></td>
            <td><?=$row['emp_department'];?></td>
            <td><?=$row['emp_mobile'];?></td>
            <td><?=$row['emp_email'];?></td>
            <td><?=$row['emp_dob'];?></td>
            <td><?=$row['emp_doj'];?></td>
            <td><?=$row['emp_gender'];?></td>
            <td><?=$row['emp_status'];?></td>
            <td><?=$row['emp_remark'];?></td>
        </tr>
    <? } ?>
</table>
    </div>
<?php


?>



<!--<script>-->
<!--    function fun()-->
<!--    {-->
<!--        $.ajax({-->
<!--            type: 'POST',-->
<!--            url: 'ajax.php',-->
<!--            success: function (response) {-->
<!--                console.log(response);-->
<!---->
<!--                a = JSON.parse(response);-->
<!--                $('#name').val(a.emp_code);-->
<!---->
<!--            }-->
<!--        });-->
<!--    }-->
<!---->
<!--    -->
<!--</script>-->
    </div>


    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    <?php include "includes/footer.php"; ?>
