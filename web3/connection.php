<?php
//$connection = mysqli_connect('localhost', 'root', '', 'Shopping');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'online_shoping');
if (isset($_GET['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
}

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

$shanu = new MySqlDatabaseHelper;


?>
