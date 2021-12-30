<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/db.php";

class MProduto extends db{
    
        private $idProduct;
        private $name;
        private $value;
        private $quantity;
    
        public function getidProduct() {
            return $this->idProduct;
        }
    
        public function setidProduct($idProduct) {
            if(preg_match('/^\d+$/', $idProduct)){
                $this->idProduct = $idProduct;
                return 0;
            }
            else{
                return 1;
            }
        }
    

        public function getname() {
            return $this->name;
        }
    
        public function setname($name) {
            if(preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÂÊÎÔÛÃÕÀÈÌÒÙàèìòù ]+$/', $name)) {
                $this->name = $name;
                return 0;
            }
            else{
                return 2;
            }
        }
    
        public function getvalue() {
            return $this->value;
        }
    
        public function setvalue($value) {
            if (preg_match('/^\d+[.,]\d+$/', $value)) {
                str_replace(",",".", $value);
                $this->value = $value;
                return 0;
            }
            else{
                return 3;
            }
        }

           //método usado para expor os produtos na tabela.

            public function listProduct() {
                $query = "select * from produto";
                $parameters = array();
                $listar = $this->executarQuery($query, $parameters);
                return $listar;
            }

            //Método para inserir produto na tabela.
    
            public function addProduct() {
                $query = "insert into produto (name, value, quantity) values (?, ?, ?)";
                $parameters = array($this->name, $this->value, $this->quantity);
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }
            //Método para deletar produto na tabela.

            public function removeProduct() {
                $query = "delete from produto where idProduct = ?";
                $parameters = array($this->idProduct);
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }

            //Método para editar produto na tabela.

            public function editProduct() {
                $query = "update produto set name = ?, value = ?, quantity = ?, where idProduct = ?";
                $parameters = array($this->name, $this->value, $this->quantity, $this->idProduct);
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }
}
