<?php
include 'connection.php';
if (isset($_POST['updating'])) {

    $id = $_POST['iddd'];
    //    echo $get_id = $_POST['iding'];
    echo $name = $_POST['brand_name'];
    $status = $_POST['status'];
    $mobile = $_POST['mobile'];
    $code = $_POST['code'];
    $address = $_POST['address'];
    print_r($_POST);
    $queryyyyy = mysqli_query($shanu->con, "UPDATE brand_details SET  bra_name = '{$name}' ,bra_status = '{$status}' ,  lastupdated = now() , mobile = '{$mobile}',bra_address='{$address}' ,bra_code='{$code}' where bra_id='$id' ");
    header("Location:showbrand.php");

    echo mysqli_error($queryyyyy);

    if ($queryyyyy == true) {
        ?>
        <script>
            alert("query run");
            header("Location:showbrand.php");
        </script>

        <?
//        header("Location:rough2.php");
    } else { ?>
        <script> alert("Query dont run");</script>
        <?
        echo "Query didn't run";
//        header("Location:rough.php");
    }

}

if (isset($_POST['update_employee'])) {

    $id = $_POST['emp_id'];
    $code = $_POST['code'];
    $username = $_POST['user_name'];
    $name = $_POST['name'];
    $father = $_POST['father'];
    $department = $_POST['Department'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

    $query = mysqli_query($shanu->con, "update employee_details set 
emp_code='$code',emp_username='$username',emp_name='$name',emp_f_name='$father',emp_department='$department',emp_mobile='$mobile',emp_email='$email',emp_dob='$dob',emp_gender='$gender',emp_status='$status',emp_remark='$remarks',lastupdated=now() where emp_id = '$id'");

    if($query){
        header('Location:show_employee.php');
    }

}


