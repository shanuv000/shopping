<?php
$con = mysqli_connect('localhost', "root", "", "My_con");

if (isset($_POST['insert'])) {
    $name = $_POST['insert'];
    ?>

    <?
    $query = mysqli_query($con, "insert into infor(name) values('$name')");

}


if (isset($_POST['show'])) {
$query = mysqli_query($con, "select * from infor ");
?>
<h2 class="text-center">Show</h2>
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
    </tr>
    <? while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        </tr><? }
    } ?>







