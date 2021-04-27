<?php
include 'db.php';
$output = '';
if(isset($_POST['log'])){
    //get the fata from the form fields
    $uname = mysqli_real_escape_string($connect, $_POST['username']);
    $pwd = mysqli_real_escape_string($connect, $_POST['secret']);
}
?>