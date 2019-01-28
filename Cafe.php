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
			max-width: 50%;
 			margin: 0 auto;
   			display: inline-block;
    		padding: 0.25em 0.5em;
    		text-decoration: none;
    		color: white;
    		background: black;
    		border-radius: 4px;
    		box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), inset 0 -2px 0 rgba(0, 0, 0, 0.05);
    		font-weight: bold;
    		border: solid 2p green;
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
			max-width: 50%;
 			margin: 0 auto;
   			display: inline-block;
    		padding: 0.25em 0.5em;
    		text-decoration: none;
    		color: white;
    		background: darkorange;
    		border-radius: 4px;
    		box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), inset 0 -2px 0 rgba(0, 0, 0, 0.05);
    		font-weight: bold;
    		border: solid 2p green;
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
			max-width: 50%;
 			margin: 0 auto;
   			display: inline-block;
    		padding: 0.25em 0.5em;
    		text-decoration: none;
    		color: white;
    		background: sienna;
    		border-radius: 4px;
    		box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), inset 0 -2px 0 rgba(0, 0, 0, 0.05);
    		font-weight: bold;
    		border: solid 2p green;
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
