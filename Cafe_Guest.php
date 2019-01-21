<!DOCTYPE html>

<html>
	<head>
		<title>客メニュー</title>
		
		<style>
		#game-window{}
		
		body{
			background-image:url(assets/CafeBack.jpg);
			background-size:cover;
		}
		
		div{
			max-width: 50%;
 			margin: 0 auto;
 			text-align : center;
		}
		
		#menuBook{}
		
		#Coffee{
			position: absolute;
			top: auto;
			top: 250px; 
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
			top: auto;
			top: 425px; 
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
			top: auto;
			top: 600px; 
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
			max-width: 50%;
 			margin: 0 auto;
 			text-align : center;
 			top: 100px;
		}
		
		#menu0_button{
			position: absolute;
			top: auto;
			top: 800px; 
			left : 50%;
			max-width: 50%;
 			margin: 0 auto;
   			display: inline-block;
    		padding: 0.25em 0.5em;
    		text-decoration: none;
    		color: white;
    		background: red;
    		border-radius: 4px;
    		box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), inset 0 -2px 0 rgba(0, 0, 0, 0.05);
    		font-weight: bold;
    		border: solid 2p green;
		}
		</style>
		
		<script>
		
			function Initialize(){
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
		
		<form action="Result.php">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Coffee" value="コーヒー" onClick="Decision(1);">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="Caramel" value="キャラメル" onClick="Decision(2);">
			<input type="button"style="WIDTH: 200px; HEIGHT: 50px" id="IceCoffee" value="アイスコーヒー" onClick="Decision(3);">
			
			<input type="hidden" id="Num" name="menu_guest"  value="1">
			<button id="menu0_button" style="WIDTH: 200px; HEIGHT: 50px">決定</button>
		</form>
		<script script language="javascript" type="text/javascript">
			gw=document.querySelector("#game-window");
							
			function Decision(NUM){
				
				document.getElementById('Num').value=NUM;
				
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
