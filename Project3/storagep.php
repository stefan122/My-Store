<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>STORAGE</title>
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
	storage();
?>
<?php
	function storage()
	{
		include ("dataconn.php");
		$query="Select * from storage";
		$result=mysqli_query($conn, $query);
		
		echo "<table border=1>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>";
			echo $row['SSD'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $row['HardDisk'];
			echo "</td></tr>";
		}
	}
?>