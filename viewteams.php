<?php
	//Init Variables
	$title = "View Teams";
	$msg = "";

	//Header
	require 'header.php';

	/* THIS IS JUST A TEST QUERY I USED WHEN SETTING THINGS UP. I DONT WANT TO DELETE IT THO SO ITS JUST GOING TO SIT HERE COMMENTED OUT.
	//Request 10 newest teams
	$sql = "SELECT * FROM `t_teams` ORDER BY `team_id` DESC LIMIT 10";
	$query_data = mysqli_query($conn, $sql) or DIE('Bad Select Query');
	*/

	//Check for search submission
	if(ISSET($_POST['submitbutton'])) {

		//Check for input
		if(ISSET($_POST['teamname']) && ($_POST['teamname'] != "")) {
			$teamname = $_POST['teamname'];

			//search database for team
			$sql = "SELECT * FROM `t_teams` WHERE team_name='$teamname'";
			$query_data = mysqli_query($conn, $sql) or DIE('Bad Select Query');

			//Store resultant team data in array
			$teams_array = array();
			if($row = mysqli_fetch_array($query_data)){
				//Store data in an array
				array_push($teams_array, $row);
			}else{
				$msg = "No team exists with that name";
			}
		}else{
			$msg = "Please enter a team name to search for";
		}
	}
?>
<html>
	<div class="div-content">
		<h1>
			View Teams
		</h1>

		<!--Feedback msg-->
		<p>
			<?php echo($msg); ?>
		</p>

		<!--Team Search Form-->
		<form method="POST" action="viewteams.php">
               <input type="text" name="teamname" placeholder="Search for a team" >
               <input type="submit" name="submitbutton" value="Search">
          </form>
<?php
	//Check if teams array exists
	if(ISSET($teams_array)) {
		//Check if teams array has data
		if(ISSET($teams_array)) {}
?>
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
	}
?>
		</table>
	</div>
</html>
<?php

	//Footer
	require 'footer.php';

?>
