<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>My Card</title>
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
<?php
	include ("body.php");
	include ("test.php");
	echo "<br />";
	cpu();
	gpu();
	echo "<br />";
?>
</body>
