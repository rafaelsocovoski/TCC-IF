<!DOCTYPE html>
<?php
require_once "funcoes.php";

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

<body style="background-image: url(&quot;assets/img/portfolio-1.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="shadow" style="width: 100%;min-height: 300px;margin-top: 119px;background-color: rgba(255,255,255,0.79);">
                    <form class="custom-form" action="/HTML/Esqueci.php" method="post" id="formcad" name="formcad" style="padding-top: 70px;">
                        <div class="form-group" >
                            <h1 class="text-center">Esqueceu a Senha?</h1>
                        </div>
                            <div class="form-group">
                              <div  class="form-group "style="text-align:center">
                                 <input  class="form-control form-control-lg" type="radio" name="usuario" value="professor" required/><h2>Professor</h2>
                                 <input  class="form-control form-control-lg" type="radio" name="usuario" value="aluno"required><h2>Aluno</h2></input>
                             </div>
                                <input class="form-control form-control-lg" type="email" style="width: 50%;margin-left: 25%;" placeholder="Email" name="email" required>
                           </div>
                        <div class="form-group">
                             <button class="btn btn-dark btn-lg" style="width: 50%;margin-left: 25%;" type="submit" value="env" name="env">Enviar</button>
                              <br>
                                 <br>
                        </div>
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
  
                    if(isset($_POST['env'])){
                    $email = $_POST['email'];
                    $usuario = $_POST['usuario'];
                     remail($email,$usuario);
                }

?>