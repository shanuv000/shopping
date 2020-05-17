<?php
include "connection.php";
if (isset($_POST['addCategory'])) {
    $cat = $_POST['category'];
    print_r($_POST);
    $query = mysqli_query($shanu->con, "insert into category(cat_name) value('$cat')");
}

if (isset($_POST['deletes'])) {
    $delete = $_POST['idss'];
    $query = mysqli_query($shanu->con, "delete from brand_details where bra_id='$shanu'");
}

if (isset($_POST['updates'])) {
    $id = $_POST['idss'];
    $id = mysqli_escape_string($shanu->con, $id);
    $sql = "select * from brand_details where bra_id='$id' limit 1";
    $data = mysqli_fetch_assoc(mysqli_query($shanu->con, $sql));
    if (is_array($data)) {
        ?>
        <div class="modal fade" id="modalEditBrand" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Brand</h4>
                    </div>
                    <div class="modal-body">
                        <?php print_r($data) ?>

                        <h3>
                            This is Vaibhav.
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<script>alert('Invalid Product Id.')</script>";
    }


}





