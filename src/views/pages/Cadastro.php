<?php

use src\controllers\UserController;

require_once 'vendor/autoload.php';
if($_POST){
    if (isset($_POST['cadastro'])) {
        $nome = $_POST ["nome"];
	    $cpf = $_POST ["cpf"];
		$cadastro = new UserController();
		$cadastro->cadastro_user($nome, $cpf);
	}
}
     
   
?>
<html>
    <head>
    
		<script>
		
        if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
        }
        </script>

        <link rel = "stylesheet" href = "/src/views/css/Login.css">
    
    </head>
<body>

    <div class="container">
    
        <img src = "https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">

        <form method = "POST">
            <input type = "text" name="nome" placeholder = "Nome">
            <input type = "text" name="cpf" placeholder = "CPF" required>
            <input class = "button" type = "submit" value = "Cadastro">
            <input type="hidden" name="cadastro">
            
            <!--<input type="hidden" name="opcao" value="cadastro">-->
    
        </form>
    </div>
    <!--<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>-->
</body>
</html>