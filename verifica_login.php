<?php
session_start();// inicia a sessão

if( !$_SESSION['usuario']){ // verifica a sessão [ caso o usuario tente entrar direto pelo painel]
  header('Location: index.php'); // ele é redirecionado para a pagina de login
  exit();
}


?>