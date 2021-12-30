<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/db.php";

class MRegister extends db{
        
        private $id;
        private $name;
        private $password;
        private $tel;
        private $date;
        private $city;
        private $estate;
        private $address;


        public function getId() {
            return $this->name;
        }
    
        public function setId($id) {
             if(preg_match('/^\d+$/',$id)){
                $this->id = $id;
                return 0;
            }
            else{
                return 1;
            }
        }

        public function getName() {
            return $this->name;
        }
    
        public function setName($name) {
            if(preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÂÊÎÔÛÃÕÀÈÌÒÙàèìòù ]+$/', $name)){
                $this->name = $name;
                return 0;
            }
            else{
                return 1;
            }
        }

        
        public function getPassword() {
            return $this->password;
        }
    
        public function setPassword($password) {
            if (preg_match('/^\d+[.,]\d+$/', $password)){
                $this->password = $password;
                return 0;
            }
            else{
                return 1;
            }
        }



        public function getTel() {
            return $this->tel;
        }
    
        public function setTel($tel) {
            if (preg_match('/^\d+[.,]\d+$/', $tel)){
                $this->tel = $tel;
                return 0;
            }
            else{
                return 1;
            }
        }


        public function getDate() {
            return $this->date;
        }
    
        public function setDate($date) {
           if (preg_match('/^\d+[.,]\d+$/', $date)){
                $this->date = $date;
                return 0;
            }
            else{
                return 1;
            }
        }



        public function getCity() {
            return $this->city;
        }
    
        public function setCity($city) {
            if(preg_match('/^\d+$/', $city)){
                $this->city = $city;
                return 0;
            }
            else{
                return 1;
            }
        }



        public function getEstate() {
            return $this->estate;
        }
    
        public function setEstate($estate) {
           if(preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÂÊÎÔÛÃÕÀÈÌÒÙàèìòù ]+$/', $estate)){
                $this->estate = $estate;
                return 0;
            }
            else{
                return 1;
            }
        }



        public function getAddress() {
            return $this->address;
        }
    
        public function setAddress($address) {
            if(preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÂÊÎÔÛÃÕÀÈÌÒÙàèìòù ]+$/', $address)){
                $this->address = $address;
                return 0;
            }
            else{
                return 1;
            }
        }

            //Método para exibir usuario na tabela

            public function listUser() {
                $query = "select * from users";
                $parameters = array();
                $list = $this->executarQuery($query, $parameters);
                return $list;

            //Método para inserir usuario na tabela.
    
            public function addUser() {
                $query = "insert into users (name, password, tel, date, city, estate, address) values (?, ?, ?, ?, ?, ?, ?)";
                $parameters = array($this->name, $this->password, $this->tel, $this->date, $this->city, $this->estate, $this->address);
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }

            //Método para deletar usuario na tabela.

            public function deleteUser() {
                $query = "delete from users where id = ?";
                $parameters = array($this->id);
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }

            //Método para editar usuario na tabela.

            public function editUser() {
                $query = "update users set name = ?, password = ?, tel = ?, date = ?, city = ?, estate = ?, address = ?, where id = ?";
                $parameters = array($this->name, $this->password, $this->tel, $this->date, $this->city, $this->estate, $this->address)
                $result = $this->executarQuery($query, $parameters);
                return $result;
            }
?>
