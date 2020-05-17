<script>
    src = "https://code.jquery.com/jquery-3.4.1.min.js"
    integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin = "anonymous" ></script>
<?
if (isset($_POST['updates'])) {
    $id = $_POST['idss'];
    $id = mysqli_escape_string($shanu->con, $id);
    $sql = "select * from brand_details where bra_id='$id' limit 1";
    $data = mysqli_fetch_assoc(mysqli_query($shanu->con, $sql));
//   $row = mysqli_fetch_assoc();
//    $name = $row['bra_name'];
    if (is_array($data)) {
//        $p = json_encode($data);
//        print_r($p);

        //print_r($data)
        $get_id = $data['bra_id'];
        $get_name = $data['bra_name'];
        $get_status = $data['bra_status'];
        $get_mobile = $data['mobile'];
        $get_code = $data['bra_code'];
        $get_address = $data['bra_address'];

        ?>


        <?php


    } else {
        echo "<script>alert('Invalid Brand Id.')</script>";
    }
    ?>


    <div class="modal fade" id="modalEditBrand" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title ">Edit Brand</h4>
                </div>
                <div class="modal-body">


                    <form method="post" action="action.php">

                        <div class="form-group">
                            <input type="text" name="iddd" value="<?= $get_id ?>" class="form-control"
                                   class="form-control" hidden>
                        </div>
                        <div class="form-group">

                            <label>Brand-Code</label><input type="text" id="code" name="code"
                                                            placeholder="Enter Code" id="code"
                                                            value="<?= $get_code ?>"
                                                            class="form-control">
                        </div>
                        <? if (isset($_POST['code'])) {
                            echo $_POST['code'];
                        }

                        ?>
                        <div class="form-group">
                            <label>Brand Name</label> <input type="text" id="brand_name" name="brand_name"
                                                             id="name" placeholder="Enter Brand Name"
                                                             value="<?= $get_name ?>"
                                                             class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contact</label><input type="text" name="mobile" id="mobile"
                                                         id="mobile" placeholder="Enter mobile"
                                                         value="<?= $get_mobile ?>"
                                                         class="form-control">
                        </div>

                        <div class="form-group">

                            <label>Status</label>
                            <select name="status" id="status" class="form-control" value="<?= $get_status ?>">
                                <option value="-1" selected>Select Status</option>
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>
                                Address</label> <textarea name="address" id="address" cols="20px" id="address"
                                                          class="form-control" placeholder="Remarks">
                                    <?= $get_address; ?>


                                </textarea>
                            </textarea>
                        </div>
                        <center></center>
                        </button>
                        <!--                    <button name="update" class="btn btn-primary" onclick="shanu()">Update Here</button>-->

                        <input type="submit" class="btn btn-success" value="Update" name="updating">

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                </div>
            </div>
        </div>
    </div>

    <?php
    ?>


    <?

}
?>







<!--<script>-->
<!--    function edits(iding) {-->
<!--        $.ajax({-->
<!---->
<!--            type: 'post', url: 'action.php',-->
<!--            data: {id: iding, editss: ""},-->
<!--            success: function (data) {-->
<!--                header("Location:brand_update");-->
<!---->
<!--            }-->
<!---->
<!--        })-->
<!--    }-->
<!--</script>-->