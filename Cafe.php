<!DOCTYPE html>

<html>
	<head>
		<title>お店</title>
		
		<style>
		#game-window
		{			
		}
		
		#menu0_img
		{
			width:280px;
			position:absolute;
			top:60px;
			left:60px;
		}
		#menu0_button
		{
			width:200px; height:50px;
			position:absolute;
			top:360px;
			left:60px;
			font-size:16pt;
		}
	
		#menu1_img
		{
			width:280px;
			position:absolute;
			top:60px;
			left:360px;
		}
		#menu1_button
		{
			width:200px; height:50px;
			position:absolute;
			top:360px;
			left:420px;
			font-size:16pt;
		}
		
		#menu2_img
		{
			width:280px;
			position:absolute;
			top:60px;
			left:660px;
		}
		#menu2_button
		{
			width:200px; height:50px;
			position:absolute;
			top:360px;
			left:720px;
			font-size:16pt;
		}
		
		</style>
		
	</head>

	<body>
		<div id="game-window">
		
				<img id="menu0_img" src="assets/name_neko.png">
					<button id="menu0_button">コーヒー</button>
				</img>

				<img id="menu1_img" src="assets/牡蠣L.png">
					<button id="menu1_button">紅茶</button>
				</img>
			
				<img id="menu2_img" src="assets/秋刀魚R.png">
					<button id="menu2_button">ココア</button>
				</img>
			
		</div>
		
		<script>
			gw=document.querySelector("#game-window");
		</script>
		
	</body>
</html>
