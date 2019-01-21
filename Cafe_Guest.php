<!DOCTYPE html>

<html>
	<head>
		<title>客メニュー</title>
		
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
		
		#gazo{
			position: absolute;
			top: 20%; 
			left : 70%;		
		}
		</style>
		
		<script>
		
			function Initialize(){
			var n=0;
			document.getElementById("Coffee").disabled = false;
			document.getElementById("Caramel").disabled = false;
			document.getElementById("IceCoffee").disabled = false;
			}

		</script>
	</head>

	<body>
		<div id="game-window">
			<img id="menuBook"src="assets/menu.png">
			<img id="gazo" name="gazo">
		</div>
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Coffee" value="コーヒー" onClick="Decision(1);">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Caramel" value="キャラメル" onClick="Decision(2);">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="IceCoffee" value="アイスコーヒー" onClick="Decision(3);">
			
		<script script language="javascript" type="text/javascript">
			gw=document.querySelector("#game-window");
							
			function Decision(NUM){
				n = NUM;
				
				if ( NUM == 1 ) {
					document.getElementById("gazo").src="assets/coffee.png";
					document.getElementById("gazo").alt="コーヒー";
				}
				else if( NUM == 2 ){
					document.getElementById("gazo").src="assets/caramel.png";
					document.getElementById("gazo").alt="キャラメル";
				}
				else if( NUM == 3 ){
					document.getElementById("gazo").src="assets/Ice_coffee.png";
					document.getElementById("gazo").alt="アイスコーヒー";
				}
			}

		</script>
		
	</body>
</html>
