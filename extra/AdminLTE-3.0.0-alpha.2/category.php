<?php include 'connection.php';
include 'bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <title>AdminLTE | Category</title>

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

        <div class="container">
            <div class="text-center"><h2>Category</h2>
            </div>
                <form>
                    <div class="form-group">
                        <label>Add-Category</label>
                        <input type="text" name="cat" id="category" class="form-text">
                    </div>
                    <button onclick="shanu();" type="button">submit</button>
                </form>
                <? $post_cat = $_POST['cat']; ?>
            <script>


                function shanu() {
                    var category = $('#category').val();
                    $.ajax({
                        type: 'post',
                        url: 'ajax.php',
                        data: {category: category, addCategory: ''},
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }

            </script>
            <form method="post">
                <div class="col-sm-5">
                    <?php
                    $query = mysqli_query($shanu->con, "select * from category ");
                    ?>
                    <div class="form-group">
                        <?php
                        print_r($_POST);
                        ?> <select name="category" class="form-control">
                            <?php


                            while ($row = mysqli_fetch_assoc($query)) {
                                $cat_id = $row['cat_id'];
                                $cat_name = $row['cat_name'];
                                ?>
                                <option value="<?= $cat_id; ?>"><?= $cat_name; ?>
                                </option>


                            <? } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subcat">

                    </div>

                    <input type="submit" name="submit_subcat" id="submit_cat" class="btn btn-success">
                </div>
            </form>
            <script>
                $.ajax({

                    type:
                        'post',
                    url:
                        'ajax.php',
                    data:
                        {  },
                    success:
                        function (response) {
                            console.log(response);
                        }

                })
            </script>
            -->

            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

            <?php include "includes/footer.php"; ?>






