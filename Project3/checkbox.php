<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Selected</title>
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
?>
<?php
	echo "You selected: <br />";
	if(isset($_POST['cpu'])){
		$cpu = $_POST['cpu'];
		foreach($cpu as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['gpu'])){
		$gpu = $_POST['gpu'];
		foreach($gpu as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['cases'])){
		$cases = $_POST['cases'];
		foreach($cases as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['storage'])){
		$storage = $_POST['storage'];
		foreach($storage as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['ram'])){
		$ram = $_POST['ram'];
		foreach($ram as $key => $value){
			echo $value.'<br />';
		}
	}
	if(isset($_POST['psu'])){
		$psu = $_POST['psu'];
		foreach($psu as $key => $value){
			echo $value.'<br />';
		}
	}
?>
