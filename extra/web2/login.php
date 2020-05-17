<?php
include "connection.php"; ?>


<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($shanu->con, "select * from customer where c_username='$username' and c_password='$password'");
    $row = mysqli_fetch_assoc($query);
    $data_username = $row['c_username'];
    $data_password = $row['c_password'];
    $cnt = mysqli_num_rows($query);

    if ($cnt == 1) {

        session_start();
        $_SESSION['username'] = $username;
        header("Location:index.php");
    } else {
        echo "<script> alert('Enter Correct Username or Password');</script>";
    }

}
?>
<div class="agilemodal-dialog modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body  pt-3 pb-5 px-sm-5">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="images/p3.png" class="img-fluid" alt="login_image"/>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder=" " name="username" id="recipient-name"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="login" class="form-control" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
