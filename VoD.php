<?php
$fortunes = array(
    0 =>'img',
    1 =>'img',
    2 =>'img',
    3 =>'img',
);

  $i = mt_rand(0, count($fortunes) -1);
  $image = $fortunes[$i];
  
  	switch($i)
	{
		case 1:
		$image="assets/Ice_coffee.png";
		break;

		case 2:
		$image="assets/caramel.png";
		break;

		case 3:
		$image="assets/coffee.png";
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
				<img id="menu0_img" src="<?php echo $image; ?>">
				</img>
				<img id="menu0_button" src="win.png"></img>
		</div>
		
		<script>
		if(true){
		}
			gw=document.querySelector("#game-window");
		</script>
		
	</body>
</html>
