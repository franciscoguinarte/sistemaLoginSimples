<?php
 // inicia a sessao
include('verifica_login.php');// arquivo que verifica se existe alguem logado

echo "Ola,",( $_SESSION['usuario']);?>

<h2>
  <a href ="logout.php"> Sair </a> </br>

  <input type="button" id = 'logout'>
</h2> 
<script>
  var logoff = document.getElementById('logout').src ('logout.php');

</script>
