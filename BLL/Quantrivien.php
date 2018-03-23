<?php
require_once("../DAL/Quantrivien.php");
require_once("../Entities/Quantrivien.php");

    class BLL_Quantrivien{
        public $quantrivien;
        function BLL_Quantrivien(){
            $this->quantrivien=new DAL_Quantrivien();
        }
        public function themqtv(Entities_Quantrivien $qtv){
            
            return $this->quantrivien->them($qtv);
        }
        public function suaqtv(Entities_Quantrivien $qtv){
            return $this->quantrivien->sua($qtv);
        }
        public function xoaqtv(Entities_Quantrivien $qtv){
            return $this->quantrivien->xoa($qtv);
        }
        public function getqtv(){
            return $this->quantrivien->get();
        }
       
        public function kiemtra(Entities_Quantrivien $qtv){
            return $this->quantrivien->kt($qtv);
        }
        public function login(Entities_Quantrivien $qtv){
            return $this->quantrivien->log($qtv);
        }
          public function soqtv(){
            return $this->quantrivien->so_qtv();
        }
        public function dlpage($start,$limit){
            return $this->quantrivien->dl_page($start,$limit);
        }
    }
?>