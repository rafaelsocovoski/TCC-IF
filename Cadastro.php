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

<body style="background-image: url(&quot;assets/img/TCC.png&quot;);">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="/HTML/Cadastro.php" method="post" id="formcad" name="formcad">
                <h1>Cadastro</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">
                    Nome
                    </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nome"required></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">
                    Email
                    </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email"required></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Senha</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="senha"required></div>
                </div>
               
                 <input type="submit" class="btn btn-primary mb-2 center-block btn-lg" name="enviar" value="enviar">
                </form>
        </div>
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
if (isset($_POST["enviar"])) {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
 
  $cad = cadprof($email,$nome,$senha);
}

//header('Location: ProfessorCadastros.html');
?>
