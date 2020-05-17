<?php include 'bootstrap.php'; ?>

<!doctype html>
<html lang="en">
<head>

    <title>Show data</title>


</head>
<body>


<?php
$shanu = new MySqlDatabaseHelper();
$query = mysqli_query($shanu->con, "select * from product_details");
$row = mysqli_fetch_assoc($query);

?>
<table class="table table-bordered table-hover">
    <tr>
        <th> S.No</th>
        <th>
            code
        </th>
        <th>
            Product
            Name
        </th>
        <th> Mrp
        </th>
        <th> Rate
        </th>
        <th> Tax
        </th>
        <th> Remarks
        </th>
        <th>
            Discription
        </th>
        <th> Status</th>
        <th> Unit</th>
        <th> Date</th>
        <th>
            Delete
        </th>

    </tr>

    <? $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($query)) {

        $id = $row['pro_id']; ?>
        <tr>
            <td><?= $i; ?></td>

            <td><?= $row['pro_code']; ?></td>
            <td> <?= $row['pro_name']; ?></td>
            <td><?= $row['pro_mrp']; ?></td>
            <td><?= $row['pro_rate']; ?></td>
            <td><?= $row['pro_tax']; ?></td>
            <td><?= $row['pro_remark']; ?></td>
            <td><?= $row['pro_description']; ?></td>

            <td><?= $row['pro_status']; ?></td>
            <td><?= $row['pro_unit']; ?></td>
            <td><?= $row['pro_creation_date']; ?></td>


            <td>
                <button onclick="shanu(<?= $id; ?>)"><i class="fas fa-trash-alt"> </i></button>

            </td>


        </tr>
        <? $i++;
    } ?>
</table>


</body>
</html>

<script>
    function shanu(id) {
        $.ajax({
            type: 'post',
            data: {id: id},
            url: 'deleteProduct.php',
            success: function f(data) {
                document.location.reload();
            }
        });
    }
</script>