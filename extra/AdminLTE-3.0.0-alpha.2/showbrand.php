<? include 'bootstrap.php';
include 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Brand</title>
</head>
<body>
<div class=" container-fluid">
    <table class="table table-hover table-bordered">

        <tr>
            <th>
                Brand Name
            </th>
            <th>
                Status
            </th>
            <th>
                date
            </th>
            <th>
                mobile
            </th>
            <th>
                code
            </th>
            <th>
                Address
            </th>
            <th>delete</th>
<th>Update</th>
        </tr>
        <?php $query = mysqli_query($shanu->con, "select * from brand_details");
        $row = mysqli_fetch_assoc($query);
        while ($row = mysqli_fetch_assoc($query)) {
            $name = $row['bra_name'];
            $status = $row['bra_status'];
            $date = $row['bra_date'];
            $mobile = $row['mobile'];
            $code = $row['bra_code'];
            $address = $row['bra_address'];

            $id = $row['bra_id'];
            ?>

            <tr>
                <td>
                    <?= $name; ?>
                </td>
                <td>
                    <?

                    if ($status == 0) {
                        echo "Not Available";
                    } else if ($status == 1) {
                        echo "Available";
                    } else if ($status == -1) {
                        echo "Not selected";
                    }; ?>
                </td>
                <td>
                    <?= $date ?>
                </td>
                <td>
                    <?= $mobile; ?>
                </td>
                <td>
                    <?= $code; ?>
                </td>
                <td>
                    <?= $address; ?>
                </td>
                <td>
                    <button onclick="shanu(<?= $id ?>)" name="sub" id="delete" class="btn btn-danger">Delete</button>
                </td>
                <td>
                    <button onclick="fun(<?= $id ?>)" name="edit" id="edit" class="btn btn-success">
                        Edit
                    </button>
                </td>
            </tr>
        <? } ?>
    </table>
</div>
<div id="ajaxResponse"></div>
</body>
</html>

<script>
    function shanu(id) {
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {idss: id, deletes:""},
            success: function f(data) {
                document.location.reload();
            }
        })
    }


    function fun(id) {
        $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: {idss: id, updates: ""},
            success: function (data) {
                $("#ajaxResponse").html(data);
                $("#modalEditBrand").modal();
            }
        });
    }
</script>
