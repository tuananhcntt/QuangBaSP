<?php
require_once("../DAL/Sanpham.php");
require_once("../Entities/Sanpham.php");

    class BLL_Sanpham{
        public $sanpham;
        function BLL_Sanpham(){
            $this->sanpham=new DAL_Sanpham();
        }
        public function themsanpham(Entities_Sanpham $sp){
            
            return $this->sanpham->them($sp);
        }
        public function suasanpham(Entities_Sanpham $sp){
            return $this->sanpham->sua($sp);
        }
        public function xoasanpham(Entities_Sanpham $sp){
            return $this->sanpham->xoa($sp);
        }
        public function getsanpham(){
            return $this->sanpham->get();
        }
        public function getslide(){
            return $this->sanpham->get_slide();
        }
        public function getrandom(){
            return $this->sanpham->getrand();
        }
        public function gettheonhom($nhom){
            return $this->sanpham->getnhom($nhom);
        }
        public function gettheoloai($loai){
            return $this->sanpham->getloai($loai);
        }
        public function getchitiet($sp){
            return $this->sanpham->getct($sp);
        }
        public function kiemtra(Entities_Sanpham $sp){
            return $this->sanpham->kt($sp);
        }
        public function timsanpham($key){
             return $this->sanpham->tim($key);
        }
        //phân trang
        public function sosanpham(){
            return $this->sanpham->so_sp();
        }
        public function dlpage($start,$limit){
            return $this->sanpham->dl_page($start,$limit);
        }
    }
?>