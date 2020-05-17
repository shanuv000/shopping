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
                <form action="" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter username" autofocus name="username"
                               id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="Password">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" name="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $Name = $_POST['username'];
    $Password = $_POST['Password'];
    $query = mysqli_query($shanu->con, "select * from customer where c_username='$Name' and c_password='$Password'");
    $count = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    $datausername = $row['c_username'];
    $id = $row['c_id'];
    $email = $row['c_email'];
    ?>
    <?php
    $_SESSION['email'] = $email;
    $_SESSION['userid'] = $id;

?>
    <?
}

?>

