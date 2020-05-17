
<?php
include "connection.php";

    $ids = $_POST['id'];
    $queryss = mysqli_query($shanu->con, "DELETE FROM product_details WHERE pro_id = '$ids'");



?>