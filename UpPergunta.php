<?php
require_once "funcoes.php";
include_once "menu.php";

$id = $_POST['id'];
var_dump($id);

$cs = viperg($id);
$cs2= $_SESSION['dados'];

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
        <form class="custom-form" action="/HTML/perg.php" method="post" id="formcad" name="formcad">
            <h1>Atualizar Pergunta</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Descrição</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="texto" value="<?= $cs2[0]['texto'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Resposta correta</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_corre"value="<?= $cs2[0]['alternativa_correta'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 1</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e1"value="<?= $cs2[0]['alternativa_e1'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 2<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e2"value="<?= $cs2[0]['alternativa_e2'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Alternativa Errada 3<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="alt_e3"value="<?= $cs2[0]['alternativa_e3'] ?>"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Materia<br></label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="mat"value="<?= $cs2[0]['materia'] ?>"></div>
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




