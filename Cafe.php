<!DOCTYPE html>

<html>
	<head>
		<title>お店</title>
		
		<style>
		#game-window
		{		
			background-image:url(assets/CafeBack.jpg);
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
				<form action="Result.php">
					<img id="menu0_img" src="assets/coffee.png">
					<input type="hidden" name="menu"  value="1">
					<button id="menu0_button">コーヒー</button>
				</form>

				<form action="Result.php">
					<img id="menu1_img" src="assets/caramel.png">
					<input type="hidden" name="menu"  value="2">
					<button id="menu1_button">キャラメル</button>
				</form>
				
				<form action="Result.php">
					<img id="menu2_img" src="assets/Ice_coffee.png">
					<input type="hidden" name="menu"  value="3">
					<button id="menu2_button">アイスコーヒー</button>
				</form>
		</div>
		
	</body>
</html>
