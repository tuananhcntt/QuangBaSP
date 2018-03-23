<?php
require_once("../DAL/Loaisp.php");
require_once("../Entities/Loaisp.php");

    class BLL_Loaisp{
        public $loaisp;
        
        function BLL_Loaisp(){
            $this->loaisp=new DAL_Loaisp();
        }
        public function themloai(Entities_Loaisp $loai){
            
            return $this->loaisp->them($loai);
        }
        public function sualoai(Entities_Loaisp $loai){
            return $this->loaisp->sua($loai);
        }
        public function xoaloai(Entities_Loaisp $loai){
            return $this->loaisp->xoa($loai);
        }
        public function kiemtra(Entities_Loaisp $loai){
            return $this->loaisp->kt($loai);
        }
        public function getloai(){
            return $this->loaisp->get();
        }
        public function timloai($key){
             return $this->loaisp->tim($key);
        }
        //phân trang
        public function soloai(){
            return $this->loaisp->so_loai();
        }
        public function dlpage($start,$limit){
            return $this->loaisp->dl_page($start,$limit);
        }
    }
?>