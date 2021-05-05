<?php 

$search_term = $_SESSION['cust'];

//Getting the alias name
$getAlias = "SELECT * FROM users WHERE username = '$search_term'";
$foundNme = mysqli_query($connect, $getAlias);
if (mysqli_num_rows($foundNme) > 0) {
	while ($person = mysqli_fetch_assoc($foundNme)) {
		$aliasName = $person['alias'];
		return $aliasName;
	}
}

$matchGetter = "SELECT * FROM (SELECT * FROM lmatches WHERE winner = '$aliasName'  ORDER BY id DESC LIMIT 3) as r ORDER BY id";
$latestMatches = mysqli_query($connect, $matchGetter);

if (mysqli_num_rows($latestMatches) > 0) {
	while ($row = mysqli_fetch_assoc($latestMatches)) {
		#get the rows individual data
		$hmPl = $row['Hplayer'];
		$awPl = $row['Aplayer'];
		$hmTm = $row['Hteam'];
		$awTm = $row['Ateam'];
		$wnr = $row['winner'];
		$mId = $row['matchid'];
		$playDte = $row['tarehe'];

		/*Display The Results Depending on thecredit or debit value
		//Will do this later since I am on a deadline RN
		foreach ($row as $key => $value) {
			print_r($key . $value);
		}*/
		//html data
		$showData = "<table class='table table-dark' id='multichange'>
						<caption>Looser Recent Matches</caption>";
		$showData .= "
					<thead>
					    <tr>
					      <th scope='col'>H. Player</th>
					      <th scope='col'>A. Player</th>
					      <th scope='col'>H. Team</th>
					      <th scope='col'>A. Team</th>
					      <th scope='col' class='text text-success'>Winner</th>
					      <th scope='col'>Date</th>
					      <th class='text text-warning' scope='col'>Match Id</th>
					    </tr>
					  </thead>";
		$showData .= "<tbody>
						<tr>
							<td>$hmPl</td>
							<td>$awPl</td>
							<td>$hmTm</td>
							<td>$awTm</td>
							<td class='text text-success'>$wnr</td>
							<td>$playDte</td>
							<td class='text text-warning'>$mId</td>
						</tr>
					</tbody>";
		$showData .= "</table>";

		echo $showData;
	}
}else{
	echo "No Data Found!";
}


 ?>