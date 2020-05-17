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
                <div class="text-center"><h2>Add Employee</h2></div>

                <form action="" method="post">
                    <div class="form-group">
                        <label>Employee-Code</label> <input type="text" id="code" name="code" placeholder="Enter Code"
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
                        <label>Employee-Name</label><input type="text" name="name" id="name" placeholder="Enter Name"
                                                           onchange="Change" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Employee-Father Name</label><input type="text" name="father" id="father"
                                                                  placeholder="Enter Father Name" class="form-control">
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
                        <input type="date" class="date form-control" name="dob">
                    </div>

                    <!--                    <div class="form-group">-->
                    <!--                        <label>age</label><input type="number" name="age" id="age" placeholder="Enter age"-->
                    <!--                                                 class="form-control">-->
                    <!--                    </div>-->


                    <div class="form-group">
                        <label>
                            Date of Joining
                        </label>
                        <input type="date" class="date form-control" name="doj">
                    </div>


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
            </div>


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
            <!--      <script>-->
            <!--function Change(){-->
            <!--var mrp=document.getElementById('mrp').value;-->
            <!--console.log(mrp);-->
            <!--document.write(mrp);-->
            <!---->
            <!--}-->
            <!--</script>-->


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
