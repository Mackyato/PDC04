<?php
//die('ss');
$sname= "localhost";

$uname= "root";

$password = "";

$db_name = "bsit3a";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

} else {
     echo "Connection success!";
}

?>