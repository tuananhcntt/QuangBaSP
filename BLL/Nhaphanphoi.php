<?php
require_once("../DAL/Nhaphanphoi.php");
require_once("../Entities/Nhaphanphoi.php");

    class BLL_NPP{
        public $nhaphanphoi;
        
        function BLL_NPP(){
            $this->nhaphanphoi=new DAL_Nhaphanphoisp();
        }
        public function themnpp(Entities_NPP $npp){
            
            return $this->nhaphanphoi->them($npp);
        }
        public function suanpp(Entities_NPP $npp){
            return $this->nhaphanphoi->sua($npp);
        }
        public function xoanpp(Entities_NPP $npp){
            return $this->nhaphanphoi->xoa($npp);
        }
        public function kiemtra(Entities_NPP $npp){
            return $this->nhaphanphoi->kt($npp);
        }
        public function getnpp(){
            return $this->nhaphanphoi->get();
        }
        public function timnpp($key){
             return $this->nhaphanphoi->tim($key);
        }
        //phân trang
        public function sonpp(){
            return $this->nhaphanphoi->so_npp();
        }
        public function dlpage($start,$limit){
            return $this->nhaphanphoi->dl_page($start,$limit);
        }
    }
?>