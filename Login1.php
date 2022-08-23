<?php
require_once 'funcoes.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PIAG</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Material-Style-Ripple-Button.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover-1.css">
    <link rel="stylesheet" href="assets/css/Pulse-Button-on-Hover.css">
</head>

<body>
    <div class="login-clean" style="background-image: url(&quot;assets/img/TCC.png&quot;);height: 774px;">
        <form method="post" action="/HTML/Login1.php" style="width: 328px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Password"></div>
            <input  type="radio" name="usuario" value="professor" required/>Professor
            <input  type="radio" name="usuario" value="aluno"required>Aluno</input>
            <div class="form-group">
            <input type="submit" class="btn btn-primary mb-2 center-block btn-lg" name="enviar" value="login" style="center">
            </div><a class="forgot" href="Cadastro.php">Cadastro</a><a class="forgot" href="Esqueci.php">Esqueci a Senha</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
    <script src="assets/js/Material-Style-Ripple-Button.js"></script>
</body>

</html>

<?php 
if(isset($_POST['enviar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario =$_POST['usuario'];
        
        $usu = fazerlogin($email, $senha, $usuario);

        
        if(sizeof($usu)>0){ 
            
                $_SESSION[$usuario]['id'] = $usu[0]['id'];
                $_SESSION[$usuario]['email'] = $usu[0]['email'];
                $_SESSION[$usuario]['nome'] = $usu[0]['nome'];
                $nome =  $usu[0]['nome'];
                if($usuario=='professor'){
               // echo $_SESSION['professor']['id'];
                header('Location: ProfessorCadastros.php');
                }else if($usuario=='aluno'){
                    header('Location: AlunoTela1.php');
                }
            }

            else{           
                $_SESSION['erro'] = 'Senha incorreta!';
                echo "<script>alert('Email, Senha ou Tipo de Usuario Incorreto');window.location='Login1.php'</script>";
            }
    
   
    
            }
        
            ?>
