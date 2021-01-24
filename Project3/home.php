<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<title>Home Page</title>
</head>
<body>
	<div id="home">
		<h1 align="center">Computer Parts Store</h1>
		<div id="header">
			<ul>
				<li><a href="blog.php">My Card</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="header2">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="category.php">Categories</a></li>
			</ul>
		</div>
	</div>
	<!--<form>
			<input type="text" placeholder="Username" />
			<i class="fas fa-user"></i>
	</form>--><!--икончиња-->

<?php
	include ("body.php");
	include ("test.php");

	echo "<div id='stefan'>";

		echo "<br />";
		cpu();
		gpu();
		echo "<br />";
		cases();
		echo "<br />";
		storage();
		echo "<br />";
		ram();
		echo "<br />";
		psu();
		echo "<br />";

	echo "</div>";
?>
</body>
