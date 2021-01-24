<body>
	<div id="body">
		<h3 align="center">Choose Components</h3>
			<b> Процесори:</b>
			<form action="checkbox.php" method="post">
				<input class="box" type="checkbox" name="cpu[]" value="i7"/>i7
				<br/>
				<input class="box" type="checkbox" name="cpu[]" value="i5"/>i5
				<br/>
				<input class="box" type="checkbox" name="cpu[]" value="i3"/>i3
				<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 7"/>Ryzen 7
				<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 5"/>Ryzen 5
				<br/>
				<input class="box" type="checkbox" name="cpu[]" value="Ryzen 3"/>Ryzen 3

				<b>Графички:</b>

				<input class="box" type="checkbox" name="gpu[]" value="Nvidia"/>Nvidia
				<br/>
				<input class="box" type="checkbox" name="gpu[]" value="AMD Radeon"/>AMD Radeon

				<b>Куќишта:</b>

				<input class="box" type="checkbox" name="cases[]" value="Cooler Master"/>Cooler Master
				<br/>
				<input class="box" type="checkbox" name="cases[]" value="NZXT"/>NZXT
				<br/>
				<input class="box" type="checkbox" name="cases[]" value="Fractal Design"/>Fractal Design
				<br/>
				<input class="box" type="checkbox" name="cases[]" value="Termaltake"/>Termaltake
				<br/>

				<b>Меморија:</b>

				<input class="box" type="checkbox" name="storage[]" value="SSD"/>SSD
				<br/>
				<input class="box" type="checkbox" name="storage[]" value="HardDisk"/>HardDisk
				<br/>

				<b>РАМ:</b>

				<input class="box" type="checkbox" name="ram[]" value="Kingston"/>Kingston
				<br/>
				<input class="box" type="checkbox" name="ram[]" value="G.Skill"/>G.Skill
				<br/>
				<input class="box" type="checkbox" name="ram[]" value="CORSAIR"/>CORSAIR
				<br/>

				<b>Напојување:</b>

				<input class="box" type="checkbox" name="psu[]" value="Seasonic"/>Seasonic
				<br/>
				<input class="box" type="checkbox" name="psu[]" value="Corsair"/>Corsair
				<br/>
				<input class="box" type="checkbox" name="psu[]" value="EVGA"/>EVGA
				<br/>
				<input class="box" type="checkbox" name="psu[]" value="Thermaltake"/>Thermaltake
				<br/>
				<br/>
				<input class="submit" type="submit" value="Submit"/>
			</form>
	</div>
</body>
