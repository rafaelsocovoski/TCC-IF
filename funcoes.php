<?php
require_once 'ConexaoBD.class.php';
require_once 'PHPMailer/PHPMailerAutoload.php';
date_default_timezone_set('Etc/UTC');
define("sitedir", "http://localhost/HTML", TRUE);
session_start();


function cadprof($email,$nome,$senha){
	$conexaoBD = new ConexaoBD();
	$teste=$conexaoBD->preparar("SELECT * FROM professor WHERE email = ?");
	$dados=$conexaoBD->buscar(array($email));
	if (sizeof($dados)>0)
	{
		echo "<script>alert('Email já cadastrado');window.location='Cadastro.php'</script>";

	}else{
    $conexaoBD->preparar("INSERT INTO professor (id, email,nome, senha) VALUES (DEFAULT,?,?,MD5(?))");
  	$conexaoBD->executar(array($email, $nome, $senha));
	echo "<script>alert('Cadastro realizado com sucesso');window.location='Login1.php'</script>";

	$conteudo_email ="Olá Sr(a): " . $nome . "\n";
	$conteudo_email .="Obrigado por utilizar o PIAG" . "\n";   
	$conteudo_email .="Sua senha é : ". $senha . "\n";																																		
	$conteudo_email.=  "Att." . "\n";										
	$conteudo_email.="PIAG";
	   
	/*  Com a senha em mãos envia no corpo do e-mail  */
	
	/* Ex de envio informado pelo: wolfphw */
   
   // require 'mailer/src/PHPMailer.php';
   $mail = new PHPMailer();
   $mail->IsSMTP();  // telling the class to use SMTP
   $mail->SMTPDebug = 2;
   $mail->Mailer = "smtp";
   $mail->Host = "ssl://smtp.gmail.com";
   $mail->Port = 465;
   $mail->SMTPAuth = true; // turn on SMTP authentication
   $mail->Username = "teste@gmail.com"; // SMTP username
   $mail->Password = "senhagmail"; // SMTP password
 //  $Mail->Priority = 1;
   $mail->AddAddress($email,"Nome");
   $mail->SetFrom("teste@gmail.com", "PIAG");
   $mail->Subject  = "Cadastro";
   $mail->Body     = $conteudo_email;
   $mail->WordWrap = 50;
   if(!$mail->Send()) {
   echo 'Message was not sent.';
   echo 'Mailer error: ' . $mail->ErrorInfo;
   } else {
   echo 'Message has been sent.';
   }
}
}


function fazerlogin($email, $senha, $usuario){
	$conexaoBD = new conexaoBD();
	$conexaoBD->preparar('SELECT * FROM '.$usuario. ' WHERE email = ? AND senha = MD5(?)');
	$conexaoBD->executar(array($email,$senha));
	$dados = $conexaoBD->buscar(array($email, $senha));
	return $dados;	
}

function cadesc($numero,$escola){
	$conexaoBD = new ConexaoBD();
	$id_prof = $_SESSION['professor']['id'];
    echo $id_prof;
    $conexaoBD->preparar("INSERT INTO turma (id,escola,id_professor,numero) VALUES (DEFAULT,?,?,?)");
    $conexaoBD->executar(array($escola, $id_prof, $numero));
}

function cadperg($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3){
  	$conexaoBD = new ConexaoBD();
    $conexaoBD->preparar("INSERT INTO pergunta (id,texto,materia,alternativa_correta,alternativa_e1,alternativa_e2,alternativa_e3) VALUES (DEFAULT,?,?,?,?,?,?)");
  	$conexaoBD->executar(array($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3));
    echo 'cadastrado x';
}


function sair(){
session_start();
unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
header("Location: Login1.php");
}


function remail($email,$usuario){
	// Recupera email informado do formulario
   $conexaoBD = new conexaoBD();
   /* Cria conexão com banco de dados */
   
   /* Pesquisa por e-mail informado e retorna senha */
   $sql = "SELECT senha FROM ".$usuario." WHERE email = '?'";
   $con = $conexaoBD->conectar();
   $conexaoBD->preparar( "SELECT senha FROM ".$usuario." WHERE email = ?");
   $dados=$conexaoBD->buscar(array($email));
 
  if (sizeof($dados)>0)
   {
	   $senha = '';

		   $senha = $dados[0]['senha'];
	   
	   
	   $conteudo_email = 'Sua senha é: ' . MD5($senha);
	   
	   /*  Com a senha em mãos envia no corpo do e-mail  */
	   
	   /* Ex de envio informado pelo: wolfphw */
	  
	  // require 'mailer/src/PHPMailer.php';
	  $mail = new PHPMailer();
	  $mail->IsSMTP();  // telling the class to use SMTP
	  $mail->SMTPDebug = 2;
	  $mail->Mailer = "smtp";
	  $mail->Host = "ssl://smtp.gmail.com";
	  $mail->Port = 465;
	  $mail->SMTPAuth = true; // turn on SMTP authentication
	  $mail->Username = "teste@gmail.com"; // SMTP username
	  $mail->Password = "senhagmail"; // SMTP password
	//  $Mail->Priority = 1;
	  $mail->AddAddress($email,"Nome");
	  $mail->SetFrom("teste@gmail.com", "PIAG");
	  
	  $mail->Subject  = "Recuperar senha";
	  $mail->Body     = $conteudo_email;
	  $mail->WordWrap = 50;
	  if(!$mail->Send()) {
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	  } else {
	  echo 'Message has been sent.';
	  }
	}
	}

	function listarPergunta(){
		$conexaoBD = new conexaoBD();
		$id='';
		$conexaoBD->preparar('SELECT * FROM pergunta');
		$dados = $conexaoBD->buscar(array());
		$x=0;
		for ($x=0;$x < sizeof($dados);$x++) {
		
		  echo "<tr>";
		  echo "<td>" . $dados[$x]["id"] . "</td>";
		  echo "<td>" . $dados[$x]["texto"] . "</td>";
		  echo "<td>" . $dados[$x]["materia"] ."</td>";
		  echo "<td>" . $dados[$x]["alternativa_correta"] . "</td>";
		  echo "<td>" . $dados[$x]["alternativa_e1"] . "</td>";
		  echo "<td>" . $dados[$x]["alternativa_e2"] . "</td>";
		  echo "<td>" . $dados[$x]["alternativa_e3"] . "</td>";
		
		
		  echo "<td> <form action='deletarPerg.php' method='post' >
			<input type='hidden' name='id' value=" . $dados[$x]['id'] . " />
			  <button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> remover</button></form>
			  </td>";
		  echo "<td> <form action='UpPergunta.php' method='post'>
					   <input type='hidden' name='id' value=" . $dados[$x]['id'] . "/>
				<button class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> atualizar</button></form>
				</td>";
		  echo "</tr>";
		  
		}
		

}
	function listarAluno(){
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('SELECT * FROM aluno');
		$dados = $conexaoBD->buscar(array());
		$x=0;
		while (sizeof($dados)>0) {		
		  echo "<tr>";
		  echo "<td>" . $dados[$x]["id"] . "</td>";
		  echo "<td>" . $dados[$x]["email"] . "</td>";
		  echo "<td>" . $dados[$x]["nome"] ."</td>";
		   				$dados[$x]["senha"];
		  echo "<td>" . $dados[$x]["id_turma"] . "</td>";
		  echo "<td>" . $dados[$x]["alternativa_e2"] . "</td>";
		  echo "<td>" . $dados[$x]["alternativa_e3"] . "</td>";
		
		  echo "<td> <form action='deletCliente.php' method='post'>
			<input type='hidden' name='id' value=" . $dados[$x]['id'] . "/>
			  <button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> remover</button></form>
			  </td>";
		  echo "<td> <form action='UpAluno.php' method='post'>
					   <input type='hidden' name='id' value=" . $dados[$x]['id'] . "/>
				<button class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> atualizar</button></form>
				</td>";
		  echo "</tr>";
		  $_SESSION['dados'] = $dados;
		  $x=$x++;
		}

	}
	function listarTurma(){
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('SELECT * FROM turma');

		$dados = $conexaoBD->buscar(array());
		$x=0;
		for ($X= 0;$x < sizeof($dados);$x++) {		
		  echo "<tr>";
		  echo "<td>" . $dados[$x]["id"] . "</td>";
		  echo "<td>" . $dados[$x]["escola"] . "</td>";
		  echo "<td>" . $dados[$x]["numero"] ."</td>";
		  echo "<td>" . $dados[$x]["id_professor"] . "</td>";
	
		
		  echo "<td> <form action='deletCliente.php' method='post'>
			<input type='hidden' name='id' value=" . $dados[$x]['id'] . "/>
			  <button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> remover</button></form>
			  </td>";
		  echo "<td> <form action='UpTurma.php' method='post'>
					   <input type='hidden' name='id' value=" . $dados[$x]['id'] . "/>
				<button class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> atualizar</button></form>
				</td>";
		  echo "</tr>";
		  $x=$x++;
		}

	}
	function viperg($id){
		var_dump($id);
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('SELECT * FROM pergunta WHERE id = ?');
		$conexaoBD->executar(array($id));
		$dados = $conexaoBD->buscar(array());
		$_SESSION['dados'] =$dados;

	}
	function del(){
	$conexaoBD = new ConexaoBD();
	$conexaoBD->preparar('DELETE FROM pergunta WHERE id = ?');
	
    $conexaoBD->executar(array());

	}
	function upperg($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3,$id){
		$conexaoBD = new ConexaoBD();
		$conexaoBD->preparar('UPDATE pergunta SET texto = ? ,materia = ?,alternativa_correta = ?,alternativa_e1 = ?,alternativa_e2 = ?,alternativa_e3 = ? WHERE id = ?');
		$conexaoBD->executar(array($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3));
		header('Location: ViPergunta.php');
	
	}
	
	function deletarpergunta($id){
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('DELETE  FROM pergunta WHERE id = ?');
		$conexaoBD->executar(array($id));
		echo  "<script>alert('Pergunta deletada com sucesso');window.location='ViPergunta.php'</script>";
	}

	function mostrarJogo($x){
		
	
	}
?>
