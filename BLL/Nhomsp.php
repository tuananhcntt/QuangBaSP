<?php
require_once("../DAL/Nhomsp.php");
require_once("../Entities/Nhomsp.php");
    class BLL_Nhomsp{
        public $nhomsp;
        function BLL_Nhomsp(){
            $this->nhomsp=new DAL_Nhomsp();
        }
        public function themnhom(Entities_Nhomsp $nhom){
            
            return $this->nhomsp->them($nhom);
        }
        public function suanhom(Entities_Nhomsp $nhom){
            return $this->nhomsp->sua($nhom);
        }
        public function xoanhom(Entities_Nhomsp $nhom){
            return $this->nhomsp->xoa($nhom);
        }
        public function getnhom(){
            return $this->nhomsp->get();
        }
        public function gettheoloai($loai){
            return $this->nhomsp->get1($loai);
        }
        public function gettennhom($nhom){
            return $this->nhomsp->get2($nhom);
        }
        public function kiemtra(Entities_Nhomsp $nhom){
            return $this->nhomsp->kt($nhom);
        }
        public function timnhom($key){
             return $this->nhomsp->tim($key);
        }
        //phân trang
        public function sonhom(){
            return $this->nhomsp->so_nhom();
        }
        public function dlpage($start,$limit){
            return $this->nhomsp->dl_page($start,$limit);
        }
    }
?>