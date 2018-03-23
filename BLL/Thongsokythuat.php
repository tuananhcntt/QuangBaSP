<?php
require_once("../DAL/Thongsokythuat.php");
require_once("../Entities/Thongsokythuat.php");

    class BLL_Thongsokythuat{
        public $dt;
        
        function BLL_Thongsokythuat(){
            $this->dt=new DAL_Thongsokythuat();
        }
        public function themtskt(Entities_Thongsokythuat $tskt){
            
            return $this->dt->them($tskt);
        }
        public function suatskt(Entities_Thongsokythuat $tskt){
            return $this->dt->sua($tskt);
        }
        public function xoatskt(Entities_Thongsokythuat $tskt){
            return $this->dt->xoa($tskt);
        }
        public function kiemtra(Entities_Thongsokythuat $tskt){
            return $this->dt->kt($tskt);
        }
        public function gettskt(){
            return $this->dt->get();
        }
        public function timtskt($key){
             return $this->dt->tim($key);
        }
        //phân trang
        public function sotskt(){
            return $this->dt->so_tskt();
        }
        public function dlpage($start,$limit){
            return $this->dt->dl_page($start,$limit);
        }
    }
?>