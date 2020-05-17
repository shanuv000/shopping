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
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
              crossorigin="anonymous">


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


                    <div class="text-center"><h2>Add Employee</h2></div>

                    <form action="" method="post">
                        <div class="form-group">
                            <label>Employee-Code</label> <input type="text" id="code" name="code"
                                                                placeholder="Enter Code"
                                                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Employee-Username</label> <input type="text" id="emp_name" name="user_name"
                                                                    placeholder="Enter Product Name"
                                                                    class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Employee-password</label><input type="text" name="pwd" id="mrp"
                                                                   placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Employee-Name</label><input type="text" name="name" id="name"
                                                               placeholder="Enter Name"
                                                               onchange="Change" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Employee-Father Name</label><input type="text" name="father" id="father"
                                                                      placeholder="Enter Father Name"
                                                                      class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Department</label><input type="text" name="Department" id="Department"
                                                            placeholder="Enter Department" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Mobile</label><input type="text" id="mobile" name="mobile" placeholder="Enter mobile"
                                                        class="form-control">
                        </div>
                        <div class="form-group">
                            <label>email</label><input type="text" name="email" id="email" placeholder="Enter email"
                                                       class="form-control">
                        </div>


                        <div class="form-group">
                            <label>
                                dob
                            </label>
                            <input type="date" class="form-control" name="dob">
                        </div>

                        <!--                    <div class="form-group">-->
                        <!--                        <label>age</label><input type="number" name="age" id="age" placeholder="Enter age"-->
                        <!--                                                 class="form-control">-->
                        <!--                    </div>-->





                        <div class="form-group" name="gender">
                            <label>
                                Gender
                            </label> <select class="form-control" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select></div>
                        <div class="form-group" name="status">
                            <label>
                                Status
                            </label>
                            <select class="form-control" name="status">

                                <option value="0">Available</option>
                                <option value="1">Unavailable</option>
                            </select></div>

                        <div class="form-group">
                            <label>
                                Remarks
                            </label> <textarea name="remarks" cols="20px" id="Remarks" class="form-control"
                                               placeholder="Remarks">
</textarea>

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
    $user = $_POST['user_name'];

    $pwd = $_POST['pwd'];
    $emp_name = $_POST['name'];
    $father = $_POST['father'];

    $department = $_POST['department'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $dob = $_POST['dob'];
    $doj = $_POST['doj'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];


    $query = "";
    if ($_POST['code'] == "") { ?>
        <script> alert('Field Cant be Empty') </script>
        <?

    } else {
        $query = mysqli_query($shanu->con, "insert into employee_details (emp_code,emp_username,emp_password,emp_name,emp_f_name,emp_department,emp_mobile,emp_email,emp_dob,emp_doj,emp_gender,emp_status,emp_remark) value ('$code','$user','$pwd','$emp_name','$father','$department','$mobile','$email','$dob',now(),'$gender','$status','$remarks')");
    }
    if ($query == true) {


        header("Location:add_product.php");
    }

}

?>