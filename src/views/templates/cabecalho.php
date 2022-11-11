<html lang="pt-br">

<head>
  <meta charset="UTF-8">

  <title>EngSoft</title>

  <style>
    /*

  Paleta

  #02031a - quase preto
  #021b2b - azul escuro
  #b10c43 - vermelho fosco
  #ff0841 - vermelho claro
  #ebdfcc - beige

  */

    * {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    .cabeçalho {
      background: linear-gradient(#02031a, #021b2b);
      width: 100%;
      height: 150px;
      display: flex;
      align-items: center;
    }

    .logo {
      font-size: 50px;
      padding: 15px;
      font-weight: bold;
      text-decoration: none;
      color: #b10c43;
      margin-left: 100px;
    }

    .profile {
      margin-left: 400%;
    }

    .profile img {
      width: 50px;
      background: #b10c43;
      border-radius: 30px;
    }


    .sideR {
      display: flex;
      grid-gap: 20px 90px;
    }

    .buy img {
      width: 50px;
      background: #b10c43;
      border-radius: 30px;
    }
  </style>
</head>

<header>
  <div class="cabeçalho">
    <a class="logo" href="/produtos">LOGO</a>
    <div class="sideR">
      <a href="#" class="profile">
        <img src="https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">
      </a>
      <a href="/carrinho" class=" buy">
        <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG60.png">
      </a>
    </div>
  </div>
</header>

</html>