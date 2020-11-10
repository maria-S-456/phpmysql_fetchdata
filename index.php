<?php
	include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
	<div id="comments">
		<?php
			$sql = "SELECT * FROM comments LIMIT 2";
			$result = mysqli_query($conn, $sql);

			//check if there are results from database
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo "<p>";
					echo $row['author'];
					echo "<br>";
					echo $row['message'];
					echo "</p>";
				}
			} else {
				echo "There are no comments";
			}
		?>
	</div>

	<button>Show more comments</button>

	
</body>
</html>