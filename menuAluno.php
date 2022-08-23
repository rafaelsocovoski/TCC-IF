 <?php
  require_once "funcoes.php";
?>
<html lang="pt-br">

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
 <div class="col">
            <nav class="navbar navbar-light navbar-expand bg-white shadow" style="opacity: 0.72;">
                <div class="container-fluid">
                    <a class="navbar-brand border-right border-dark" href="/HTML/AlunoTela1.php" style="margin-left: 9px;padding-right: 25px;"><img src="assets/img/Union%2012.svg"><span style="margin-left: 14px;">Uma maneira mais divertida de apender</span></a><span class="h1">PIAG</span>
                    <div
                        class="collapse navbar-collapse d-md-flex justify-content-end" id="navcol-1">
                        <li class="dropdown pr-4 list-group"><a class="dropdown-toggle text-body text-decoration-none" data-toggle="dropdown" aria-expanded="false" href="#">Opções&nbsp;</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="/HTML/AlunoTela1.php">Inicio</a>
                              <a class="dropdown-item" role="presentation" href="/HTML/AlunoJogar.php">Jogar</a>
                              <a class="dropdown-item" role="presentation" href="/HTML/Media.php">Visualizar Media</a>
                              <a class="dropdown-item" role="presentation" href="/HTML/Sair.php">Sair</a>
                            </div>
                        </li>
                        <ul class="nav navbar-nav"><img src="assets/img/Mask%20Group%204.svg"></ul><span class="navbar-text"><?php echo "Nome: ". $_SESSION['aluno']['nome']?></span></div>
        </div>
        </nav>
    </div>
</body>

</html>
