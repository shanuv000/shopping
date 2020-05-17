<?php
$query = mysqli_query($shanu->con, "select * from category");

?>
<table class="table table-bordered">
    <tr>
        <th>
            Category
        </th>
        <th>
            Date
        </th>
    </tr>
    <? while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $row['cat_name']; ?></td>
            <td><?= $row['date']; ?></td>
        </tr>
    <? } ?>

</table>
