<?php 
//include 'check_session.php';

$search_term = $_SESSION['cust'];

$tafuta = "SELECT * FROM lmatches WHERE winner = '$search_term'";
$hak = mysqli_query($connect, $tafuta);

$won = mysqli_num_rows($hak);

echo $won;

 ?>