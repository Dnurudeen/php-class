<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'virtual_class');

$connect_db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($connect_db == false){
    echo "Not Connected";
}
