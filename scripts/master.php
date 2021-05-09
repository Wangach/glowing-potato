<?php 
include 'check_session.php';

//Lost Games
function getLostGames(){
	include 'db.php';
	$customer = $_SESSION['cust'];

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$lostGames = "SELECT * FROM lmatches WHERE looser = '$aliasName'";
			$gotMatches = mysqli_query($connect, $lostGames);
			$calcLost = mysqli_num_rows($gotMatches);

			echo $calcLost;
		}
	}
}

//Won Games
function getWonGames(){
	include 'db.php';
	$customer = $_SESSION['cust'];

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$wonGames = "SELECT * FROM lmatches WHERE winner = '$aliasName'";
			$gotMatches = mysqli_query($connect, $wonGames);
			$calcWon = mysqli_num_rows($gotMatches);

			echo $calcWon;
		}
	}
}

//Total played matches
function getPLayedMatches(){
	//lost games
	include 'db.php';
	$customer = $_SESSION['cust'];

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$lostGames = "SELECT * FROM lmatches WHERE looser = '$aliasName'";
			$gotMatches = mysqli_query($connect, $lostGames);
			$calcLost = mysqli_num_rows($gotMatches);
		}
	}
	//won games
	$customer = $_SESSION['cust'];

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$lostGames = "SELECT * FROM lmatches WHERE winner = '$aliasName'";
			$gotMatches = mysqli_query($connect, $lostGames);
			$calcWon = mysqli_num_rows($gotMatches);
		}
	}

	//sum of both lost and won = total games played
	$totals = $calcLost + $calcWon;

	echo $totals;

}


//show recent won matches
function showRecWon(){
	include 'db.php';
	$customer = $_SESSION['cust'];
	$showData = '';

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$wonGames = "SELECT * FROM (SELECT * FROM lmatches WHERE winner = '$aliasName'  ORDER BY id DESC LIMIT 3) as r ORDER BY id";
			$gotMatches = mysqli_query($connect, $wonGames);
			$calcWon = mysqli_num_rows($gotMatches);

			if ($calcWon > 0) {
				while ($row = mysqli_fetch_assoc($gotMatches)) {
					#get the rows individual data
					$hmPl = $row['Hplayer'];
					$awPl = $row['Aplayer'];
					$hmTm = $row['Hteam'];
					$awTm = $row['Ateam'];
					$win = $row['winner'];
					$playDte = $row['tarehe'];
					$mId = $row['matchid'];

					/*Display The Results Depending on thecredit or debit value
					//Will do this later since I am on a deadline RN
					foreach ($row as $key => $value) {
						print_r($key . $value);
					}*/
					//html data
					$showData = "<div class='table-responsive'>";
					$showData .= "<table class='table table-dark' id='multichange'>
									<caption> Recent Won Matches</caption>";
					$showData .= "
								<thead>
								    <tr>
								      <th scope='col'>H. Player</th>
								      <th scope='col'>A. Player</th>
								      <th scope='col'>H. Team</th>
								      <th scope='col'>A. Team</th>
								      <th scope='col' class='text text-success'>Looser</th>
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
										<td class='text text-success'>$win</td>
										<td>$playDte</td>
										<td class='text text-warning'>$mId</td>
									</tr>
								</tbody>";
					$showData .= "</table>";
					$showData .= "</div>";

					echo $showData;
				}
			}else{
				echo "No Data Found!";
			}
		}
	}
}
//show recent lost matches
function showRecLost(){
	include 'db.php';
	$customer = $_SESSION['cust'];
	$showData = '';

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$lostGames = "SELECT * FROM (SELECT * FROM lmatches WHERE looser = '$aliasName'  ORDER BY id DESC LIMIT 3) as r ORDER BY id";
			$gotMatches = mysqli_query($connect, $lostGames);
			$calcWon = mysqli_num_rows($gotMatches);

			if ($calcWon > 0) {
				while ($row = mysqli_fetch_assoc($gotMatches)) {
					#get the rows individual data
					$hmPl = $row['Hplayer'];
					$awPl = $row['Aplayer'];
					$hmTm = $row['Hteam'];
					$awTm = $row['Ateam'];
					$loss = $row['looser'];
					$playDte = $row['tarehe'];
					$mId = $row['matchid'];

					/*Display The Results Depending on thecredit or debit value
					//Will do this later since I am on a deadline RN
					foreach ($row as $key => $value) {
						print_r($key . $value);
					}*/
					//html data
					$showData = "<div class='table-responsive'>";
					$showData .= "<table class='table table-dark' id='multichange'>
									<caption>Recent Lost Matches</caption>";
					$showData .= "
								<thead>
								    <tr>
								      <th scope='col'>H. Player</th>
								      <th scope='col'>A. Player</th>
								      <th scope='col'>H. Team</th>
								      <th scope='col'>A. Team</th>
								      <th scope='col' class='text text-danger'>Looser</th>
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
										<td class='text text-danger'>$loss</td>
										<td>$playDte</td>
										<td class='text text-warning'>$mId</td>
									</tr>
								</tbody>";
					$showData .= "</table>";
					$showData .= "</div>";

					echo $showData;
				}
			}else{
				echo "No Data Found!";
			}
		}
	}
}
//show recent transactions
function myRecTrans(){
	include 'db.php';
	$customer = $_SESSION['cust'];
	$showData = '';

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];

			$myTransactions = "SELECT * FROM (SELECT * FROM transactions WHERE trName = '$aliasName'  ORDER BY id DESC LIMIT 3) as r ORDER BY id";
			$gottenTxns = mysqli_query($connect, $myTransactions);
			$foundTrans = mysqli_num_rows($gottenTxns);

			if ($foundTrans > 0) {
				while ($row = mysqli_fetch_assoc($gottenTxns)) {
					#get the rows individual data
					$transactor = $row['trName'];
					$transactedAmount = $row['amount'];
					$description = $row['trDesc'];
					$timeOfTxn = $row['trDte'];
					$tid = $row['trId'];

					/*Display The Results Depending on thecredit or debit value
					//Will do this later since I am on a deadline RN
					foreach ($row as $key => $value) {
						print_r($key . $value);
					}*/
					//html data
					$showData = "
									<tr>
										<td>$transactor</td>
										<td>$transactedAmount</td>
										<td>$description</td>
										<td>$timeOfTxn</td>
										<td class='text text-warning'>$tid</td>
									</tr>
								";

					echo $showData;
				}
			}else{
				echo "No Transactions Found!";
			}
		}
	}
}

//calculate customer's debt/advance Payments
function calculateCash(){
	include 'db.php';
	$customer = $_SESSION['cust'];

	$getAlias = "SELECT * FROM users WHERE username = '$customer'";
	$find = mysqli_query($connect, $getAlias);

	if (mysqli_num_rows($find) > 0) {
		while ($person = mysqli_fetch_assoc($find)) {
			$aliasName = $person['alias'];
			//We want to check the loosers table first for played matches
			$getLooser = "SELECT SUM(debt) AS madeni FROM lmatches WHERE looser = '$aliasName'";
				$found = mysqli_query($connect, $getLooser);

				//If data relating to the query is found
				if (mysqli_num_rows($found) > 0) {
					while ($row = mysqli_fetch_assoc($found)) {
						$matchesInDebt = $row['madeni'];
						//echo $matchesInDebt;
					}
				}

			//In the transactions table identify transactions made by the user
			$getTransactions = "SELECT SUM(amount) AS trns FROM transactions WHERE trName = '$aliasName'";
				$readDat = mysqli_query($connect, $getTransactions);

				if (mysqli_num_rows($readDat) > 0) {
					while ($data = mysqli_fetch_assoc($readDat)) {
						$transactionsMade = $data['trns'];

						//echo $tramsactionsMade;
					}
				}
			//Calculate the debt or advances according to the results obtained from above
			$dbOrAdv = $transactionsMade - $matchesInDebt;

			echo $dbOrAdv;
		}
	}
	
}

?>
