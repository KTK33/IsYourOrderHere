<?php
$fortunes = array(
    0 =>'img',
    1 =>'img',
    2 =>'img',
    3 =>'img',
);

  setcookie("menu",$_GET["menu"]);
  setcookie("menu_guest",$_GET["menu_guest"]);
  //$i = mt_rand(0, count($fortunes) -1);
  $i = $_GET["menu"];
  $image = $fortunes[$i];
  
  	switch($i)
	{
		case 1:
		$image="assets/coffee.png";
		break;

		case 2:
		$image="assets/caramel.png";
		break;

		case 3:

		$image="assets/Ice_coffee.png";

		break;

		default:
		$image="assets/coffee.png";
		break;
	}

?><!DOCTYPE html>

<html>
	<head>
		<title>Result</title>
		
		<style>
		body
		{			
				background-image:url(assets/CafeBack.jpg);
				background-size:cover;
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
				<img id="menu0_img" src="<?php echo $image; ?>"></img>
				<form action="VoD.php">
				<input type="hidden" name="menu"  value="<?= $_GET['menu'] ?>">
				<input type="text" name="menu_guest"  value="<?= $_GET['menu_guest'] ?>">
				<button id="menu0_button">次へ</button>
				</form>
		</div>
		
		<script>
		if(true){
		}
			gw=document.querySelector("#game-window");
		</script>
		
	</body>
</html>
