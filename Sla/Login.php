<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("127.0.0.1", "root", "digite a senha do banco aqui") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em
contato com o Administrador, rafaelsocovoski2@gmail.com");

$result = mysql_query("SELECT * FROM `PROFESSOR`
WHERE `EMAIL` = '$login' AND `SENHA`= '$senha'");
$result2 = mysql_query("SELECT * FROM `ALUNO`
WHERE `EMAIL` = '$login' AND `SENHA`= '$senha'");
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:ProfessorCadastros.php');
}else if(mysql_num_rows ($result) > 0){
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:AlunoTela1.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:Login.html');

  }
?>
