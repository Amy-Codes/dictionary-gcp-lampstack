<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>English Oxford Dictionary</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		}

		.title{
			font-size: 2em;
			padding-bottom: 20px
		}

		.sub-title{
			font-size: 1em;
			padding-bottom: 20px
		}

		form {
			width: 100%;
		}

		.search-input {
			width: 85%;
			height: 30px;
		}

		.search-button {
			background-color: #fb8500;
			color: white;
			border: 0;
			padding: 9px;
		}
	</style>
	
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<p class="title">English Oxford Dictionary Search</p>
			<p class="sub-title">This is an example of a LAMPSTACK built on GCP Compute Engine.</p>
			<form action="search.php" method="GET">
				<input class="search-input" type="text" name="query" />
				<input class="search-button" type="submit" value="Search" />
			</form>
		</div>
	</div>
</body>
</html>