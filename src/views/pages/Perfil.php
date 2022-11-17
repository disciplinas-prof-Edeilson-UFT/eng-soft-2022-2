<?php
if(!isset($_SESSION['id'])){
	echo("<script language = 'javascript'> window.location = '/login'; </script>");
}

?>
<html>

	<head>
	
		<link rel = "stylesheet" href = "/src/views/css/Perfil.css">
	
	</head>
	
	<body>
	<div id="info-perfil">
		<img id="img-info"src = "https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">
		
		<div class="info">
			
			<h2> <?php echo ($_SESSION ["usuario"]); ?> </h2>
			
			<p><span>id:</span> <?php echo ($_SESSION ["id"]); ?> </p>
			<p><span>cpf:</span> <?php echo ($_SESSION ["cpf"]); ?> </p>
			
		</div>
	</div>
	
	</body>

</html>
