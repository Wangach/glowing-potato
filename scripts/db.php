<?php
$connect = mysqli_connect('localhost', 'root', '', 'users');
if(!$connect) {
    echo "Error Connecting to the Database".mysqli_err($connect);
}
?>