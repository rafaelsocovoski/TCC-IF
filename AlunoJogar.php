<!DOCTYPE html>

<?php
require_once "funcoes.php";
include_once "menuAluno.php";
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
    <link rel="stylesheet" href="assets/css/jogo.css">
    <link rel="stylesheet" href="assets/css/radio.css">
    
</head>

<body style="background-image: url(&quot;assets/img/TCC.png&quot;);">

    <div class="container cool-btn-container">
        <div class="row">
            <div class="clearfix"></div>
        </div>
    </div>
    <div>
        <div class="container"style="width:60%">
            <div class="row">
                <div class="col-md-12">
                    <div class="gradient-wrap"></div>
                </div>
                <div class="col-6">
                    <div class="gradient-wrap"><img src="Img/vitor.gif" id="figuraJogador" width="200px" />
                        <h3 >Vida: <span id = "vidaJo"></span></h3>
                        <h3 class="classeh3" id="vidaJogador"><br></h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="gradient-wrap"><img src="Img/rafael.gif" width="150px" id="figuraInimigo"/>
                        <h3 >Vida:<span id = "vidaA"></span></h3>
                        <h3 class="classeh3" id="vidaAdversario"><br></h3>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
            <h4 style='color:blue;background-color:black;text-align: center;'id="mensagem"></h4>

                <div class="gradient-wrap">
                    <div class="jogo" style="height: 85px">
                        <h2 id="texto"></h2>
                    </div>
                        <div class='conhe'>
                            <label class='cla'>
                                <h5 id="al"></h5>
                                <input type='radio' checked='checked' id='a' name='alternativa'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='cla'>
                                <h5 id="bl"></h5>
                                <input type='radio' name='alternativa' id='b'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='cla'>
                                <h5 id="cl"></h5>
                                <input type='radio' name='alternativa' id='c'>
                                <span class='checkmark'></span>
                            </label>
                            <label class='cla' id='ae'>
                                <h5 id="dl"></h5>
                                <input type='radio' name='alternativa' id='d'>
                                <span class='checkmark'></span>
                            </label>

                        </div>
                        <Button onclick='atack()' id="atack-button" class="botao-jogo">Atacar</Button>
                        <Button onclick='restart()' id="restart-button" class="botao-jogo" >Reiniciar</Button>
                        
                        <br>
                        <br>

                </div>
            </div>

        </div>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
    <script src="assets/js/Material-Style-Ripple-Button.js"></script>
    <script src="jogo.js"></script>

    <script>
        buscarProximaPergunta();

    </script>
</body>

</html>
