<?php
require_once "funcoes.php";
include_once "menu.php";
?>
<!DOCTYPE html>

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
    <div class="row register-form" style="background-image: url(&quot;assets/img/TCC.png&quot;);">
     <div class="col-md-8 offset-md-2">
        <form class="custom-form" action="/HTML/Professor/CadastroAlunos.php" method="post" id="formcad" name="formcad">
            <h1>Cadastro Aluno</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nome</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nome"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Senha</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="senha"></div>
            </div>
            <div class="form-row form-group">
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Selecione a Turma</label></div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown </button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
            </div><button class="btn btn-light submit-button" type="button">Enviar</button></form>
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
  $resenha = $_POST["repsenha"];
  $cad = cadprof($email,$nome,$senha);
}
?>
