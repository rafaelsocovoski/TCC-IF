<?php
	require "ConexaoBD.class.php";
		
	$conexaoBD = new ConexaoBD();
	if(isset($_POST['ids'])){
		$ids = $_POST['ids'];
		$notIn = '';
		for($i = 0; $i < sizeof($ids); $i++){
			$notIn .= $ids[$i];
			
			if($i != sizeof($ids)-1){
				$notIn .= ',';
			}
		}
		$conexaoBD->preparar('SELECT * FROM pergunta WHERE id NOT IN (' . $notIn  . ') ORDER BY RAND() LIMIT 1');
		$dados = $conexaoBD->buscar();		
	}
	else{
		$conexaoBD->preparar('SELECT * FROM pergunta ORDER BY RAND() LIMIT 1');
		$dados = $conexaoBD->buscar();
	}
	
	if(!empty($dados)){
		echo json_encode($dados[0]);
	}
	else{
		echo json_encode();
	}
	?>