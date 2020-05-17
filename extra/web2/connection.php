<?php
//$connection = mysqli_connect('localhost', 'root', '', 'Shopping');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'online_shoping');

class MySqlDatabaseHelper
{


    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


    }

    public function preconnection()
    {

        echo "<pre>";
        print_r($this->con);
        echo "<pre>";

    }
}
$shanu=new MySqlDatabaseHelper;


?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

