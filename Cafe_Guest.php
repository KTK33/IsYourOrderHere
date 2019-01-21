<!DOCTYPE html>

<html>
	<head>
		<title>お店</title>
		
		<style>
		#game-window
		{			
		}
		
		div{
			max-width: 50%;
 			margin: 0 auto;
 			text-align : center;
		}
		
		#menuBook
		{
		}
		
		#Coffee{
			position: absolute;
			top: 35%; 
			left : 50%;
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
		#Caramel{
			position: absolute;
			top: 60%; 
			left : 50%;
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
		#IceCoffee{
			position: absolute;
			top: 85%; 
			left : 50%;
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
			<img id="menuBook"src="assets/menu.png">
		</div>
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Coffee" value="コーヒー">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="IceCoffee" value="アイスコーヒー">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Caramel" value="キャラメル">
			
		<script>
			gw=document.querySelector("#game-window");
		</script>
		
	</body>
</html>
