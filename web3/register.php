<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Register Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body pt-3 pb-5 px-sm-5">
        <div class="row">
            <div class="col-md-6 mx-auto align-self-center">
                <img src="images/p3.png" class="img-fluid" alt="login_image"/>
            </div>
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="recipient-name1" class="col-form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="Name"
                               id="recipient-name1" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="Email"
                               id="recipient-email" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Email</label>
                        <input type="number" class="form-control" placeholder="Enter Phone" name="phone"
                               id="recipient-email" required="">
                    </div>
                    <div class="form-group">
                        <label for="password1" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="Password"
                               id="password1" required="">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Check Password" name="Confirm"
                               id="password2" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Register" name="register">
                    </div>
                </form>
                <p class="text-center mt-3">Already a member?
                    <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                        Login Now</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['register'])) {
    $name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm = $_POST['Confirm'];
    $phone = $_POST['phone'];

    $query = mysqli_query($shanu->con, "insert into customer (c_username, c_password, c_email, c_date, c_mobile) values('$name','$Password','$Email',now(),'$phone')");

    if($query){
        ?>
        <script>alert("Query Inserted")</script>

        <?
    }
}

?>