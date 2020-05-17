<?php session_start();
if (isset($_SESSION['userid'])) {
    $id = $_SESSION['userid'];
    $query = mysqli_query($shanu->con, "select * from customer where c_id='$id'");
    $row = mysqli_fetch_assoc($query);
    $username = $row['c_username'];
    $username = ucfirst($username);

}

?>
<style>
    .yes {
        color: #a6ff67;

    }

    .not {
        color: darkred;
    }
</style>
<div class="container">


    <!-- top nav -->
    <nav class="top_nav d-flex pt-3 pb-1">
        <!-- logo -->
        <h1>
            <a class="navbar-brand" href="index.php">fh
            </a>
        </h1>
        <!-- //logo -->
        <div class="w3ls_right_nav ml-auto d-flex">
            <!-- search form -->
            <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                <select class="form-control input-lg" name="category">
                    <option value="all">Search our store</option>
                    <?php $cat_query = mysqli_query($shanu->con, "select * from category");

                    while ($row = mysqli_fetch_assoc($cat_query)) {
                        ?>
                        <optgroup label="<?= ucfirst($row['cat_name']); ?>">
                            <?php
                            $cat_id = $row['cat_id'];
                            $subcat_query = mysqli_query($shanu->con, "select * from sub_category where cat_id='$cat_id'");

                            while ($pro = mysqli_fetch_assoc($subcat_query)) {
                                ?>

                                <option value="t-shirt"><?= ucfirst($pro['sub_cat_name']); ?></option>
                            <? } ?>
                        </optgroup>
                    <? } ?>

                </select>
                <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
            </form>

            <!-- search form -->
            <div class="nav-icon d-flex">

                <!-- sigin and sign up -->
                <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal"
                   data-target="#myModal_btn">
                    <i class="far fa-user"></i>
                </a>
                <!-- sigin and sign up -->
                <!--Profile -->
                <?php if (isset($_SESSION['userid'])) { ?>


                    <a class="text-dark login_btn align-self-center mx-3 namee" href="profile.php"
                       data-target="#myModal_btn">
                        <!--                        <i class="fas fa-id-card"></i>-->
                        <?php echo "<h3 class='yes'>" . $username . "</h3>"; ?>

                    </a>

                <?php }else{
?>
                    <a class="text-dark login_btn align-self-center mx-3 namee" href="loginpage.php"
                       data-target="#myModal_btn">
                        <!--                        <i class="fas fa-id-card"></i>-->
                        <?php echo "<h3 class='not'>" . "login ". "</h3>"; ?>

                    </a>
<?


}

                ?>

                <!--Logout-->
                <a class="text-dark login_btn align-self-center mx-3 namee" href="?logout">
                    Logout
                </a>
                <!--/profile-->

                <!-- shopping cart -->
                <div class="cart-mainf">
                    <div class="hubcart hubcart2 cart cart box_1">
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                <i class="fas fa-shopping-bag"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- //shopping cart ends here -->
            </div>
        </div>
    </nav>
    <!-- //top nav -->
    <!-- bottom nav -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link  active" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <!--                    My Addition-->
                <?php $cat_query = mysqli_query($shanu->con, "select * from category");

                while ($row = mysqli_fetch_assoc($cat_query)) {
                    $cat_id = $row['cat_id'];
                    $subcat_query = mysqli_query($shanu->con, "select * from sub_category where cat_id='$cat_id'");
                    ?>

                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><?php
                            echo $catName = ucwords($row['cat_name']); ?></a>

                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <? while ($pro = mysqli_fetch_assoc($subcat_query)) { ?>
                                        <div class="col-md-4">
                                            <a class="dropdown-item"
                                               href="product.php?subcat_id=<?= $pro['sub_cat_id']; ?>"><?php echo ucwords($pro['sub_cat_name']);
                                                ?></a>

                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>


                    </li>

                <?php } ?>
                <!--                    /My Addition-->


                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- //bottom nav -->
</div>
<!-- //header container -->
