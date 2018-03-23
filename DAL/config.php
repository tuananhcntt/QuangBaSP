<?php
    class config{
        public $host="localhost";
        public $username="root";
        public $password="";
        public $database="quangbasp";
        public $kn;
        public function config(){
            $this->kn=new mysqli($this->host,$this->username,$this->password,$this->database);
            mysqli_set_charset($this->kn, 'UTF8');
        }
        public function excute($query) {
			return mysqli_query($this->kn, $query);
		}
    }
?>