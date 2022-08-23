<? 
require_once 'funcoes.php';
if (isset($_POST["enviar"])) {
  $texto = $_POST["texto"];
  $mat = $_POST["mat"];
  $alt_corre = $_POST["alt_corre"];
  $alt_e1 = $_POST["alt_e1"];
  $alt_e2 = $_POST["alt_e2"];
  $alt_e3 = $_POST["alt_e3"];
  $cad = upperg($texto,$mat,$alt_corre,$alt_e1,$alt_e2,$alt_e3,$id);
  
}
?>