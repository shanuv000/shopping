<?php
if (isset($_POST['update_employee'])) {
    $id = $_POST['idss'];
    $id = mysqli_escape_string($shanu->con, $id);
    $query = mysqli_query($shanu->con, "select * from employee_details where emp_id='$id'");
    $row = mysqli_fetch_assoc($query);
    if (is_array($row)) {
        $idssssss = $row['emp_id'];
        $code = $row['emp_code'];
        $username = $row['emp_username'];
        $name = $row['emp_name'];
        $f_name = $row['emp_f_name'];
        $department = $row['emp_department'];
        $mobile = $row['emp_mobile'];
        $email = $row['emp_email'];
        $dob = $row['emp_dob'];
        $doj = $row['emp_doj'];
        $gender = $row['emp_gender'];
        $address = $row['emp_address'];
        $status = $row['emp_status'];
        $remarks = $row['emp_remark'];


        ?>

        <div class="modal fade" id="modalEditemployee" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title ">Edit Employee</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="action.php">
                            <div class="form-group">
                                <input type="hidden" name="emp_id" class="form-control" value="<?= $idssssss ?>">
                            </div>
                            <div class="form-group">

                                <label>Employee-Code</label>
                                <input type="text" id="code" name="code" value="<?= $code ?>"
                                       placeholder="Enter Code"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Employee-Username</label> <input type="text" value="<?= $username ?>"
                                                                        id="emp_name" name="user_name"
                                                                        placeholder="Enter Product Name"
                                                                        class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Employee-Name</label><input type="text" name="name" id="name"
                                                                   value="<?= $name ?>"
                                                                   placeholder="Enter Name"
                                                                   class="form-control">
                            </div>


                            <div class="form-group">
                                <label>Employee-Father Name</label><input type="text" name="father" id="father"
                                                                          value="<?= $f_name ?>"
                                                                          placeholder="Enter Father Name"
                                                                          class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Department</label><input type="text" name="Department" id="Department"
                                                                value="<?= $department ?>"
                                                                placeholder="Enter Department" class="form-control">
                            </div>


                            <div class="form-group">
                                <label>Mobile</label><input type="text" id="mobile" name="mobile" value="<?= $mobile ?>"
                                                            placeholder="Enter mobile"
                                                            class="form-control">
                            </div>
                            <div class="form-group">
                                <label>email</label><input type="text" name="email" id="email" placeholder="Enter email"
                                                           value="<?= $email ?>"
                                                           class="form-control">
                            </div>
                            <div class="form-group">
                                <label>
                                    Date Of Birth
                                </label>
                                <input type="date" class="form-control" name="dob" value="<?= $dob ?>">
                            </div>


                            <!--                    <div class="form-group">-->
                            <!--                        <label>age</label><input type="number" name="age" id="age" placeholder="Enter age"-->
                            <!--                                                 class="form-control">-->
                            <!--                    </div>-->


                            <div class="form-group" name="gender">
                                <label>
                                    Gender
                                </label> <select class="form-control" name="gender" value="<?= $gender ?>">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select></div>
                            <div class="form-group" name="status">
                                <label>
                                    Status
                                </label>
                                <select class="form-control" name="status" value="<?= $status ?>">

                                    <option value="0">Available</option>
                                    <option value="1">Unavailable</option>
                                </select></div>

                            <div class="form-group">
                                <label>
                                    Remarks
                                </label> <textarea name="remarks" cols="20px" id="Remarks" class="form-control"
                                                   placeholder="Remarks">
                                    <?= $remarks ?>
                                </textarea>
                                </textarea>

                            </div>


                            <input type="submit" class="btn btn-success" name="update_employee" value="Update">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <?php


    }
}
?>




