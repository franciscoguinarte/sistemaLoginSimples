<?php
 // inicia a sessao
include('verifica_login.php');// arquivo que verifica se existe alguem logado

echo "Ola,",( $_SESSION['usuario']);?>

<h2>
  <!-- <a href ="logout.php"> Sair </a> </br> -->
  <form method="get" action = "logout.php" ><button type="submit"> Logout</button></form> 

</h2> 

