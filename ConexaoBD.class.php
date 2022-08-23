<?php
    class ConexaoBD{
        private $conexao;
        private $sql;
        private $resultado;
		    private $declaracao;
        private $ultimoIdInsedido;

        function __construct($sql = NULL){
            $this->conectar();
            if(!is_null($sql)){
                $this->preparar($sql);
            }
        }

        public function conectar(){
            $this->conexao = new mysqli('127.0.0.1', 'root', '', 'testet');
        }

        public function preparar($sql){
            $this->sql = $sql;
			       $this->declaracao = $this->conexao->prepare($sql);
        }

        public function executar($dados = array()){
			if(count($dados) > 0) {
				$tipo = '';
				foreach ($dados as &$dado) {
					switch(gettype($dado)){
						case 'integer':
							$tipo .= 'i';
							break;
						case 'double':
							$tipo .= 'd';
							break;
						default:
							$tipo .= 's';
					}
				}
				$this->declaracao->bind_param($tipo, ...$dados);
			}
			$this->resultado = $this->declaracao->execute();
        }

        public function quantidadeLinhasAfetadas(){
			return $this->declaracao->affected_rows;
        }

        public function houveLinhasAfetadas(){
            if($this->quantidadeLinhasAfetadas() > 0)
                return true;
            return false;
        }

        public function buscar($dados = array()){
            $this->executar($dados);
			$resultado = $this->declaracao->get_result();
			$resposta = array();
			while ($data = $resultado->fetch_array(MYSQLI_BOTH)){
				$resposta[] = $data;
			}
            return $resposta;
        }

        public function getUltimoIdInserido() {
			return $this->conexao->insert_id;
        }
    }
