<!DOCTYPE html>
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

<body style="background-image: url(&quot;assets/img/TCC.png&quot;);">
    <div class="dynamic-table">
    <div class="row clearfix">
      <div class="container">
    <fieldset>
    <legend>
    Listar Media
    </legend>
    <table class="table table-bordered table-dark">
    <tr>
    <th>
      ID
    </th>
    <th>
      Nome
    </th>
    <th>
      Turma
    </th>
    <th>
      Pontos
    </th>
    <th>
      Deletar
    </th>
    <th>
      Atualizar
    </th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM hospede h LEFT JOIN convenio c on h.convenio_hosp = c.id_convenio");
    while ($registro = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $registro["id_hospede"] . "</td>";
    echo "<td>" . $registro["nome_hosp"] . "</td>";
    echo "<td>" . $registro["email_hosp"] . "</td>";
    echo "<td> <form action='deletCliente.php' method='post'>
               <input type='hidden' name='id' value=" . $registro['id_hospede'] . "/>
        <button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> remover</button></form>
        </td>";
    echo "<td> <form action='updateClie.php' method='post'>
                 <input type='hidden' name='id' value=" . $registro['id_hospede'] . "/>
          <button class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span> atualizar</button></form>
          </td>";
    echo "</tr>";
    }
    mysqli_close($conn);
    ?>
    </table>
    </fieldset>
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
