<?php
	function buscarUsuario($email){
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('SELECT * FROM professor WHERE email = ?') or ('SELECT * FROM aluno WHERE email = ?') ;
		$dados = $conexaoBD->buscar(array($email));
		return $dados;
	}

	function buscarUsuarioSenha($email, $senha){
		$conexaoBD = new conexaoBD();
		$conexaoBD->preparar('SELECT * FROM professor WHERE email = ? AND senha = MD5(?)') or ('SELECT * FROM aluno WHERE email = ? AND senha = MD5(?)');
		$dados = $conexaoBD->buscar(array($email, $senha));
		return $dados;
	}

	function cadastrarUsuario($email, $senha, $nome){
		if(!usuarioExistente($login)){
			$conexaoBD = new conexaoBD();
			$conexaoBD->prepara('INSERT INTO usuario (id, email, senha, nome) VALUES (DEFAULT, ?, MD5(?), ?)');
			$conexaBD->executar(array($email, $senha, $nome));
			return $conexaoBD->getUltimoIdInserido();
		}else{
			return 0;

	}

	function usuarioExistente($email){
		$conexaoBD = new ConexaoBD();
		$conexaoBD->prepara('SELECT * FROM professor WHERE email = ?') or ('SELECT * FROM professor WHERE email = ?');
		$conexaoBD->buscar(array($email));
		return $conexaoBD->houveLinhasAfetadas();
	}

?>
