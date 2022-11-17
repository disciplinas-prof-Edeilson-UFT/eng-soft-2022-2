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
			<h2>Nome do usuario</h2>
			<p><span>id:</span> 1</p>
			<p><span>cpf:</span> 000.000.000-00</p>
		</div>
	</div>
	
	</body>

</html>