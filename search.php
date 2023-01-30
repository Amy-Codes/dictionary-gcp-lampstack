<?php
//Pizza6751
    $con = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
	/*
		localhost - it's location of the mysqli server, usually localhost
		root - your username
		third is your password
		
		if connection fails it will stop loading the page and display an error
	*/
	
	mysqli_select_db($con, "entries") or die(mysqli_error());
	/* tutorial_search is the name of database we've created */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<style>
		*{
			font-family: 'Roboto', sans-serif;
		}

		p, body {
			margin: 0;
		}

		.container{
			background-image: linear-gradient(#8ecae6, #023047);
			display: flex;
			flex-direction: column;
			height: 100vh;
			align-items: center;
			justify-content: center;
		}

		.wrapper{
			background-color: white;
			padding: 30px;
			border-radius: 10px;
			border: 5px solid #023047;
			display: flex;
			flex-direction: column;
			align-items: center;
			position: relative;
			max-width: 590px;
			max-height: 70vh;
			overflow-y: scroll;
		}

		.back-button {
			background-color: #fb8500;
			color: white;
			border: 0;
			padding: 9px;
			position: absolute;
			left: 10px;
			height: 40px;
			width: 100px;
			border-radius: 5px;
			top: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<button class="back-button" onclick="history.back()">Go Back</button>
				<?php
			$query = $_GET['query']; 
			// gets value sent over search form
			
			$min_length = 3;
			// you can set minimum length of the query if you want
			
			echo "<h1>Results for: ".$query."</h1>";

			if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
				
				$query = htmlspecialchars($query); 
				// changes characters used in html to their equivalents, for example: < to &gt;
				
				$query = mysqli_real_escape_string($con, $query);
				// makes sure nobody uses SQL injection
				
				$raw_results = mysqli_query($con, "SELECT * FROM entries
					WHERE (`word` LIKE '%".$query."%')") or die(mysqli_error());
					
				// * means that it selects all fields, you can also write: `id`, `title`, `text`
				// articles is the name of our table
				
				// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
				// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
				// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
				
				if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
					
					while($results = mysqli_fetch_array($raw_results)){
					// $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
					
						echo "<p><h3>".$results['word']."</h3>".$results['definition']."</p>";
						// posts results gotten from database(title and text) you can also show id ($results['id'])
					}
					
				}
				else{ // if there is no matching rows do following
					echo "No results";
				}
				
			}
			else{ // if query length is less than minimum
				echo "Minimum length is ".$min_length;
			}
		?>
		</div>
	</div>

</body>
</html>