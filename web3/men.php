<?php include 'connection.php' ?>
<?php ?>
<?php $men_cat = "4";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fashion Hub Ecommerce Category Men</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/flexslider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- Range-slider-css -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">

    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
          rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- header -->
<header>    <?php include 'header.php'; ?>
</header>
<!-- //header -->
<!-- inner banner -->
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Men's Clothing</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="fh-container mx-auto">
        <div class="row my-lg-5 mb-5">
            <!-- grid left -->
            <div class="side-bar col-lg-3">
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        Categories</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="cat1" id="cat1">
                            <label for="cat1">Fashion</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat2" id="cat2">
                            <label for="cat2">Popular</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat3" id="cat3">
                            <label for="cat3">Trending</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="cat4" id="cat4">
                            <label for="cat4">Sort by popularity</label>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <div class="search-hotel">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Brand</span> in focus</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="search here" name="search" required="">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Price</span> range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;"/>
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>latest</span> arrivals</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="arr1" id="arr1">
                            <label for="arr1">last 30 days</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="arr2" id="arr2">
                            <label for="arr2">last 90 days</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="arr3" id="arr3">
                            <label for="arr3">last 150 days</label>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Sizes</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="size1" id="size1">
                            <label for="size1">XS</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size2" id="size2">
                            <label for="size2">S</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size3" id="size3">
                            <label for="size3">M</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size4" id="size4">
                            <label for="size4">L</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size5" id="size5">
                            <label for="size5">XL</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size6" id="size6">
                            <label for="size6">XXL</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="size7" id="size7">
                            <label for="size7">XXXL</label>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- Binding -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Color</h3>
                    <div class="d-flex">
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="color1" id="color1">
                                <label for="color1">Black</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color2" id="color2">
                                <label for="color2">Blue</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color3" id="color3">
                                <label for="color3">Red</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color4" id="color4">
                                <label for="color4">Yellow</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color5" id="color5">
                                <label for="color5">White</label>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked" name="color6" id="color6">
                                <label for="color6">Green</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color7" id="color7">
                                <label for="color7">Multi</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color8" id="color8">
                                <label for="color8">Purple</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color9" id="color9">
                                <label for="color9">Gold</label>
                            </li>
                            <li>
                                <input type="checkbox" class="checked" name="color10" id="color10">
                                <label for="color10">Orange</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- //Binding -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked" name="dis1" id="dis1">
                            <label for="dis1">5% - 20%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="dis2" id="dis2">
                            <label for="dis2">20% - 40%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="dis3" name="dis3" id="dis3">
                            <label for="dis3">40% - 60%</label>
                        </li>
                        <li>
                            <input type="checkbox" class="checked" name="dis4" id="dis4">
                            <label for="dis4">60% or more</label>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
            </div>
            <!-- //grid left -->
            <!-- grid right -->
            <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
                <!-- card group  -->
                <div class="card-group">
                    <!-- card -->
                    <?php
                    if (isset($_GET['subcat_id'])) {
                        $cat_idss = $_GET['subcat_id'];

                    } else {
                        header("Location:index.php");
                        ?>
                        <script>window.location.reload();</script>
                        <?php
                    }

                    $query = mysqli_query($shanu->con, "select * from product_details where pro_sub_category='$cat_idss'");
                    while ($row = mysqli_fetch_assoc($query)) { ?>
                        <div class="col-lg-3 col-sm-6 p-0">
                            <?php $id = $row['pro_id']; ?>
                            <?php
                            $image_query = mysqli_query($shanu->con, "select * from product_image where product_id='$id'");

                            $irow = mysqli_fetch_assoc($image_query);
                            ?>
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/<?= $irow['pro_img']; ?>" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.php" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?= $row['pro_name']; ?>
                                    </h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">₹<?= $mrp = $row['pro_mrp']; ?></p>
                                        <p class="line-through">₹<?= $discount = ($mrp * 0.5) + $mrp; ?></p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="men.php" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Solid Formal Black Shirt">
                                        <input type="hidden" name="amount" value="40.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?
                    } ?>

                </div>
                <!-- //card group -->
            </div>
        </div>
    </div>
</div>
<!--// Shop -->
<footer>
    <div class="footerv2-w3ls">
        <div class="footer-w3lagile-innerr">
            <!-- footer-top -->
            <div class="container-fluid">
                <div class="row  footer-v2grids w3-agileits">
                    <!-- services -->
                    <div class="col-lg-2 col-sm-6 footer-v2grid">
                        <h4>Support</h4>
                        <ul>

                            <li>
                                <a href="payment.php">Payment</a>
                            </li>
                            <li>
                                <a href="#">Shipping</a>
                            </li>
                            <li>
                                <a href="#">Cancellation & Returns</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //services -->
                    <!-- latest posts -->
                    <div class="col-lg-3 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                        <h4>Latest Blog</h4>
                        <div class="footer-v2grid1 row">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="blog.php">
                                    <img src="images/bl2.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="blog.php">eveniie arcet ut moles morbi dapiti</a>
                            </div>
                        </div>
                        <div class="footer-v2grid1 row my-2">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="blog.php">
                                    <img src="images/bl1.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="blog.php">earum rerum tenmorbi dapiti et</a>
                            </div>
                        </div>
                        <div class="footer-v2grid1 row">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="blog.php">
                                    <img src="images/bl3.jpg" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="blog.php">morbi dapiti eveniet ut molesti</a>
                            </div>
                        </div>
                    </div>
                    <!-- //latest posts -->
                    <!-- locations -->
                    <div class="col-lg-2 col-sm-6 footer-v2grid my-lg-0 my-5">
                        <h4>office locations</h4>
                        <ul>
                            <li>
                                <a href="#">new jersey</a>
                            </li>
                            <li>
                                <a href="#">texas</a>
                            </li>
                            <li>
                                <a href="#">michigan</a>
                            </li>
                            <li>
                                <a href="#">cannada</a>
                            </li>
                            <li>
                                <a href="#">brazil</a>
                            </li>
                            <li>
                                <a href="#">california</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //locations -->
                    <!-- flickr posts -->
                    <div class="col-lg-3 col-sm-6 footer-v2grid my-lg-0 my-sm-5">
                        <h4 class="b-log">
                            flickr posts
                        </h4>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl4.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl1.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl6.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl5.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>

                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl2.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl3.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl6.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl4.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="images/bl5.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- //flickr posts -->
                    <!-- popular tags -->
                    <div class="col-lg-2  footer-v2grid mt-sm-0 mt-5">
                        <h4>popular tags</h4>
                        <ul class="w3-tag2">
                            <li>
                                <a href="shop.php">amet</a>
                            </li>
                            <li>
                                <a href="men.php">placerat</a>
                            </li>
                            <li>
                                <a href="shop.php">Proin </a>
                            </li>
                            <li>
                                <a href="boys.php">vehicula</a>
                            </li>
                            <li>
                                <a href="shop.php">diam</a>
                            </li>
                            <li>
                                <a href="women.php">velit</a>
                            </li>
                            <li>
                                <a href="shop.php">felis</a>
                            </li>
                            <li>
                                <a href="shop.php">mauris</a>
                            </li>
                            <li>
                                <a href="girls.php">amet</a>
                            </li>
                            <li>
                                <a href="shop.php">placerat</a>
                            </li>
                            <li>
                                <a href="shop.php">Proin </a>
                            </li>
                            <li>
                                <a href="index.php">vehicula</a>
                            </li>
                            <li>
                                <a href="shop.php">diam</a>
                            </li>
                            <li>
                                <a href="men.php">velit</a>
                            </li>
                            <li>
                                <a href="shop.php">felis</a>
                            </li>
                            <li>
                                <a href="women.php">mauris</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //popular tags -->
                </div>
            </div>
            <!-- //footer-top -->
            <div class="footer-bottomv2 py-5">
                <div class="container">
                    <ul class="bottom-links-agile">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>

                    </ul>
                    <h3 class="text-center follow">Follow Us</h3>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 footer-copy_w3ls">
            <div class="d-lg-flex justify-content-between">
                <div class="mt-2 sub-some align-self-lg-center">
                    <h5>Payment Method</h5>
                    <ul class="mt-4">
                        <li class="list-inline-item">
                            <img src="images/pay2.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/pay5.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/pay3.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/pay7.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="images/pay8.png" alt="">
                        </li>
                        <li class="list-inline-item ">
                            <img src="images/pay9.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="cpy-right align-self-center">
                    <h2 class="agile_btxt">
                        <a href="index.php">
                            <span>f</span>ashion
                            <span>h</span>ub</a>
                    </h2>
                    <p>© 2018 Fashion Hub. All rights reserved | Design by
                        <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- sign up Modal -->
<div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn"
     aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <img src="images/p3.png" class="img-fluid" alt="login_image"/>
                    </div>
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder=" " name="Name"
                                       id="recipient-name1" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" placeholder=" " name="Email"
                                       id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password1" class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder=" " name="Password"
                                       id="password1" required="">
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder=" " name="Confirm Password"
                                       id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2" class="mb-3">
                                        <span></span>I Accept to the Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>
                        </form>
                        <p class="text-center mt-3">Already a member?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1"
                               class="text-dark login_btn">
                                Login Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //signup modal -->
<!-- signin Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1"
     aria-hidden="true">
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
                                <input type="text" class="form-control" placeholder=" " name="Name"
                                       id="recipient-name" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder=" " name="Password"
                                       required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- signin Modal -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->
<script src="js/bootstrap.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

</body>

</html>
