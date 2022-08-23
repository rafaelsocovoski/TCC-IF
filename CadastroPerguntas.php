<?php
require_once "funcoes.php";
include_once "menu.php";
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
    <div class="row register-form" style="background-image: url(&quot;assets/img/TCC.png&quot;);">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" action="/HTML/CadastroPerguntas.php" method="post" id="formcad" name="formcad">
            <h1>Cadastro Pergunta</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Descrição</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="texto" required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Resposta correta</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_corre"required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 1</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e1"required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 2<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e2"required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 3<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e3"required></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Materia<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="mat"required></div>
            </div>
            <input type="submit" class="btn btn-light submit-button" name="enviar" value="enviar">
          </form>
    </div>
    </div>
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
  $texto = $_POST["texto"];
  $mat = $_POST["mat"];
  $alt_corre = $_POST["alt_corre"];
  $alt_e1 = $_POST["alt_e1"];
  $alt_e2 = $_POST["alt_e2"];
  $alt_e3 = $_POST["alt_e3"];
  $cad = cadperg($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3);
}



?>
