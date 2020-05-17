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
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<!--########################################################################################################-->

<?php
include "connection.php";
if (isset($_POST['addCategory'])) {
    $cat = $_POST['category'];
    print_r($_POST);
    $query = mysqli_query($shanu->con, "insert into category(cat_name) value('$cat')");
}

if (isset($_POST['deletes'])) {

    $delete = $_POST['idss'];
    ?>

    <?php
    $query = mysqli_query($shanu->con, "delete from brand_details where bra_id='$delete'");
} ?>


<!--########################################################################################################-->
<!--Brand Update-->
<?php include 'brand_update.php'; ?>


<!--########################################################################################################-->


<?php


if (isset($_POST['employee_delete'])) {

    $deletesssssssss = $_POST['id'];
    $query = mysqli_query($shanu->con, "delete from employee_details where emp_id='$deletesssssssss'");
}
?>
<!--########################################################################################################-->

<?php
include "employee_update.php";
?>
<?php

?>


<!--########################################################################################################-->
<?
if (isset($_POST['delete_customer'])) {
    $id = $_POST['id'];
    $query = mysqli_query($shanu->con, "delete from customer where c_id = '$id' ");


}
?>

<!--########################################################################################################-->
<?php
if (isset($_POST['shows_cat'])) {
    $id = $_POST['id'];
    if (!($id == "")) {
        $query = mysqli_query($shanu->con, "insert into category(cat_name,date) value('$id',now())");
    }
    include "addcategory.php";

}
?>
<!--########################################################################################################-->

<?php
if (isset($_POST['showsubcategory'])) {
    $id = $_POST['id'];
    $id = $shanu->escapeInput($_POST['id']);
    $query = mysqli_query($shanu->con, "select * from sub_category where cat_id='$id'");
    ?>
    <label>Sub-Category</label>
    <select class="form-control" name="subcat">
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <option value="<?= $row['sub_cat_id']; ?>"><?= $row['sub_cat_name']; ?></option>
        <?php } ?>
    </select>
    <?
}
?>











