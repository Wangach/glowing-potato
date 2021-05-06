<?php 

$search_term = $_SESSION['cust'];
//Getting the alias name
$getAlias = "SELECT * FROM users WHERE username = '$search_term'";
$foundNme = mysqli_query($connect, $getAlias);
if (mysqli_num_rows($foundNme) > 0) {
	while ($person = mysqli_fetch_assoc($foundNme)) {
		$aliasName = $person['alias'];
		return;
	}
}

$tafuta = "SELECT * FROM lmatches WHERE looser = '$aliasName'";
$hak = mysqli_query($connect, $tafuta);

$lost = mysqli_num_rows($hak);

echo $lost;

 ?>