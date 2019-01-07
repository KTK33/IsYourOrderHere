<!DOCTYPE html>

<html>
	<head>
		<title>お店</title>
		
		<style>
		#game-window
		{			
		}
		
		#menuBook
		{
			width:280px;
			position:absolute;
			top:60px;
			left:100px;
		}

		
		#menu0
		{
			width:280px;
			position:absolute;
			top:100px;
			left:130px;
		}
		#menu1
		{
			width:280px;
			position:absolute;
			top:200px;
			left:130px;
		}
		#menu2
		{
			width:280px;
			position:absolute;
			top:300px;
			left:130px;
		}
		</style>
		
	</head>

	<body>
		<div id="game-window">
			<img id="menuBook" src="assets/menu.png">
			<img id="menu0" src="assets/coffee.png">
			<img id="menu1" src="assets/Ice_coffee.png">
			<img id="menu2" src="assets/caramel.png">
		</div>
		
		<script>
			gw=document.querySelector("#game-window");
		</script>
		
	</body>
</html>
