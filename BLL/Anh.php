<?php
require_once("../DAL/Anh.php");
require_once("../Entities/Anh.php");

    class BLL_Anh{
        public $anh;
        
        function BLL_Anh(){
            $this->anh=new DAL_Anh();
        }
        public function themanh(Entities_anh $a){
            
            return $this->anh->them($a);
        }
        public function suaanh(Entities_anh $a){
            return $this->anh->sua($a);
        }
        public function xoaanh(Entities_anh $a){
            return $this->anh->xoa($a);
        }
        public function getanh(){
            return $this->anh->get();
        }
        public function timanh($key){
             return $this->anh->tim($key);
        }
        //phân trang
        public function soanh(){
            return $this->anh->so_anh();
        }
        public function dlpage($start,$limit){
            return $this->anh->dl_page($start,$limit);
        }
    }
?>