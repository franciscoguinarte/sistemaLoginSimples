<!DOCTYPE html5>
<html lang="pt-BR">
  <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="keywords" content="PHP, SQL, MySQL, Cadastro">
    <meta name="description" content="Criado por: Francisco Filho">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema de Login PHP + MySQL</title>

  </head>
  <!-- <style>
    @media only screen and (max-width: 600px) {
      #container-mobile{
        display:none;
      }
    }
    
  </style> -->
  <style>
    .container {
   
    padding-right: 25px;
    padding-left: 25px;
 
 

    }
  </style>
  <body>

    <header class = "jumbotron text-center text-dark bg-info">
      <h1>Sistema de Login </h1>
    </header>
    <div class = "container text-center border w-50 h-50 center" name = "container-mobile">
      <form action="login.php" method="POST">
          <div class = "form-group text-left ">
            <!-- <label for="login" >Usuario</label>  -->
            <input name="usuario" type="text" id = "usuario" class= "form-control container" placeholder="Seu usuário">
          </div>
          <div class = "form-group text-left ">
            <!-- <label for = "senha">Senha</label> -->
            <input name="senha" id ="senha" type="password" class = "form-control container" placeholder="Sua senha">
          </div>
          <div class = "form-group text-right" >
            <input type="submit" class = "btn btn-primary" value="Login"> 
          </div>
          <div class = "form-group text-right">
            <input type="button" class ="btn btn-secondary" value="Cadastrar">
          </div>

        </form>                         
    </div>  



</div>
  </body>

</html>