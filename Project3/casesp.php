<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>CASEs</title>
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
	cases();
?>
<?php
	function cases()
	{
		include ("dataconn.php");
		$query="Select * from cases";
		$result=mysqli_query($conn, $query);
		
		echo "<table border=1>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>";
			echo $row['Cooler Master'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $row['NZXT'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $row['Fractal Design'];
			echo "</td></tr>";
			echo "<tr><td>";
			echo $row['TermalTake'];
			echo "</td></tr>";
		}
	}
?>