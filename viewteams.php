<?php
	//Init Variables
	$title = "View Teams";

	//Header
	require 'header.php';


	//Request team data from database
	$sql = "SELECT * FROM `t_teams` ORDER BY `team_id` DESC LIMIT 10";
	$query_data = mysqli_query($conn, $sql) or DIE('Bad Select Query');

	//Check if user was found in the database
	$teams_array = array();
	while($row = mysqli_fetch_array($query_data)){
		//Store data in an array
		array_push($teams_array, $row);
	}
?>
<html>
	<div class="div-content">
		<h1>
			10 Newest Teams
		</h1>

		<p>
			Below is a list of the 10 most recently created teams.
		</p>

		<!--Team data-->
		<table>
			<tr>
				<th>
					ID
				</th>
				<th>
					Team Name
				</th>
				<th>
					Date Founded
				</th>
				<th>
					Team Owner
				</th>
			</tr>
<?php
	//Loop through teams array
	for($i=0; $i < sizeof($teams_array); $i ++) {
?>
			<tr>
				<td>
					<?php echo($teams_array[$i][0]); ?>
				</td>
				<td>
					<?php echo($teams_array[$i][1]); ?>
				</td>
				<td>
					<?php echo($teams_array[$i][2]); ?>
				</td>
				<td>
					<?php echo($teams_array[$i][3]); ?>
				</dt>
			</tr>
<?php
	}
?>
		</table>
	</div>
</html>
<?php

	//Footer
	require 'footer.php';

?>
