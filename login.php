<?php 
session_start();
include('conexao.php'); // pegar a instância da conexão [ está em outro arquivo (conexao.php)]

if(empty($_POST['usuario'] ) || empty($_POST ['senha'] ) ) {
  header('Location:index.php');
  exit();
              // ---<> MÉTODO PARA RETORNAR A PAGINA PRINCIPAL CASO O LOGIN OU A SENHA ESTEJAM VAZIOS
              // ---<> ESSE MÉTODO FAZ UMA COMPARAÇÃO DOS CAMPOS DE LOGIN E SENHA E ENTAO, CASO ALGUM DOS DOIS
              // --ESTEJA VAZIO, ELE RETORNA A PÁGINA PRINCIPAL DE LOGIN (INDEX.PHP)
}


$usuario = mysqli_real_escape_string($conexao,$_POST['usuario'] ) ; 
$senha = mysqli_real_escape_string($conexao,$_POST['senha'] ) ;

// montando a query
$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result); // quantidade de linhas da query
echo ($row);
if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();

}
else{
  header('Location: login.php');
    exit();

}


?>