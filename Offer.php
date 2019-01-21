<?php
	setcookie("menu",$_GET["menu"]);
?><!DOCTYPE html>

<html>
	<head>
		<title>お店</title>
		
		<style>
		#game-window
		{		
			//background-image:url(assets/CafeBack.jpg);
			background-size:cover;
			height:800px;
		}
		
		#menu0_img
		{
			width:280px;
			position:absolute;
			top:160px;
			left:460px;
		}
		#menu0_button
		{		
		 	width:200px; height:50px;
			position:absolute;
			top:460px;
			left:475px;
			font-size:16pt;
		}
	
		#menu1_img
		{
			width:280px;
			position:absolute;
			top:160px;
			left:810px;
		}
		#menu1_button
		{
			width:200px; height:50px;
			position:absolute;
			top:460px;
			left:825px;
			font-size:16pt;
		}
		
		#menu2_img
		{
			width:280px;
			position:absolute;
			top:160px;
			left:1160px;
		}
		#menu2_button
		{
			width:200px; height:50px;
			position:absolute;
			top:460px;
			left:1200px;
			font-size:16pt;
		}
		
		</style>
		
	</head>

	<body>
		<div id="game-window">
				<form action="Good.php">
					<?php
	 					echo $_GET['menu'];
					?>
					<input type="hidden" name="menu" value="<?= $_GET['menu'] ?>">
					<img id="menu1_img" src="assets/coffee.png">
					<button id="menu1_button"><?= $_GET['menu'] ?></button>
					
				</form>
		</div>
		
	</body>
</html>
