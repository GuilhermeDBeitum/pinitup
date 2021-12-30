<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/db.php";

class MUsuario extends db{

    private $login;
    private $password;
    
    //verifica se o valor na variável post log existe no banco de dados.
    public function loginCheck($post){
        $query= "SELECT * FROM MUsuario WHERE login='".$post['log']."';";
        
        $result=$this->mysqli->query($query);
        
        if($result->num_rows!=0){
            return true;
        }else{
            return false;
        }
    }
     
    public function readUserData($session){
        //Verifica os dados do perfil do usuário que iniciou a sessão.
        $query= "SELECT * FROM MUsuario WHERE idMUsuario=".$session['user'].";";					
        $sql= $this->mysqli->query($query);	
        //Insere os dados retornados em um array
        while($row = $sql->fetch_assoc()){
                $arr[] = $row;
        }
        // retorna o array criado.
        return $arr;
    }
    
   
    //Verifica se o login inserido está nos registros de
    //bancos de dados.
    public function logCheck($post){
        
        $login=$post['log'];
        
        $query= "SELECT * FROM MUsuario WHERE login='$login';";
						
    //  $sql = $this->conexao->query($query);
			
    }
    //verifica se a senha inserida está de
    //acordo com a registrada no banco.
    public function passwordCheck($post){
        // seleciona todos os registros da tabela.
        $password=md5($post['password']);
        
        $query= "SELECT * FROM MUsuario WHERE password='$password';";
						
        $sql = $this->mysqli->query($query);
			
    }
    //Variável para instanciar variável de sessão
    //de acordo com o usuário logado. Este método será usado  extensivamente
    //para futuras aplicações.
    public function idSUser($post){
        // seleciona todos os registros da tabela.
        $login=$post['log'];
        
        $query= "SELECT idMUsuario FROM MUsuario WHERE login='$login';";
        
        $session=$this->mysqli->query($query);
        $row=$session->fetch_row();
        return $row[0];
    }
   
    
}
