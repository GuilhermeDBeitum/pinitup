<?php

	define( 'MYSQL_HOST', 'localhost' );
	define( 'MYSQL_USER', 'root' );
	define( 'MYSQL_PASSWORD', 'usbw' );
	define( 'MYSQL_DB_NAME', 'test' );

	class db{
	  protected $conexao;

	  // método construtor da classe
	  public function __construct()
	  {
	
		try
		{
		$conexao = new PDO( 'mysql:host=' . MYSQL_HOST . ';port=3307' . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
		}
		catch ( PDOException $e )
		{
			echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
		}

	}

	    public function getConexao() {
		return $this->conexao;
	}
	
		public function executarQuery($query, $conexao){
			// preparando a query
			$query_pronta = $this->conexao->prepare($query);
	
			// se insert, delete ou update
			if (preg_match('/^insert/', $query) or preg_match('/^delete/', $query) or preg_match('/^update/', $query)) {
				return array("erro" => $query_pronta->execute($conexao) ? 0 : -1);
			}
			// se select
			elseif(preg_match('/^select/', $query)) {
				// OBS: Se o contador de registro for maior que 1, retorna o fetchAll e nao o fetch, que retorna apenas 1 registro.
				return array("erro" => $query_pronta->execute($conexao) ? 0 : -1, "dados" => $query_pronta->rowCount() > 1 ? $query_pronta->fetchAll(PDO::FETCH_OBJ) : $query_pronta->fetch(PDO::FETCH_OBJ));
			}
			else{
				return array("erro" => -1);
			}
		}
	}