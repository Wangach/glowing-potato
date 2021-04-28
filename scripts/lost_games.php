<?php 

$search_term = $_SESSION['cust'];

$tafuta = "SELECT * FROM lmatches WHERE looser = '$search_term'";
$hak = mysqli_query($connect, $tafuta);

$lost = mysqli_num_rows($hak);

echo $lost;

 ?>