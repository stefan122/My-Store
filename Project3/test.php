<?php
	function cases()
	{
		include ("dataconn.php");
		$query="Select * from cases";
		$result=mysqli_query($conn, $query);

		echo "<table border=1 class='table'>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['Fractal Design'];
			echo "</td></tr>";

		}
	}
	function cpu()
	{
		include ("dataconn.php");
		$query="Select * from cpu";
		$result=mysqli_query($conn, $query);

		echo "<table border=1>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['intel i7'];
			echo "</td></tr>";

		}
	}
	function gpu()
	{
		include ("dataconn.php");
		$query="Select * from gpu";
		$result=mysqli_query($conn, $query);

		echo "<table border=1>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['Nvidia'];
			echo "</td></tr>";

		}
	}
	function storage()
	{
		include ("dataconn.php");
		$query="Select * from storage";
		$result=mysqli_query($conn, $query);

		echo "<table border=1>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['SSD'];
			echo "</td></tr>";

		}
	}
	function ram()
	{
		include ("dataconn.php");
		$query="Select * from ram";
		$result=mysqli_query($conn, $query);

		echo "<table border=1>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['G.Skill'];
			echo "</td></tr>";

		}
	}
	function psu()
	{
		include ("dataconn.php");
		$query="Select * from psu";
		$result=mysqli_query($conn, $query);

		echo "<table border=1>";
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['Corsair'];
			echo "</td></tr>";

		}
	}
?>
