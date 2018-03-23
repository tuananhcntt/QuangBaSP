<?php
    require_once("../Entities/Loaisp.php");
    require_once("config.php");
    class DAL_Loaisp{
        public $dt;
        function DAL_Loaisp(){
            $this->dt=new config();
        }
        public function them(Entities_Loaisp $loai){
            $ssql="INSERT INTO Loaisp VALUES('$loai->maloai','$loai->tenloai')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Loaisp $loai){
            $sql="UPDATE Loaisp SET TenLoai='$loai->tenloai' WHERE MaLoai='$loai->maloai'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Loaisp $loai){
            $sql="DELETE FROM Loaisp Where MaLoai='$loai->maloai'";
            return $this->dt->excute($sql);
        }
        public function kt(Entities_Loaisp $loai){
            $sql="SELECT COUNT(MaLoai) as sl FROM Loaisp where MaLoai='$loai->maloai'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM Loaisp ORDER BY MaLoai ASC";
            return $this->dt->excute($sql);
        }
        public function tim($key){
            $sql="SELECT * FROM loaisp WHERE TenLoai like'$key[0]%'OR MaLoai like'$key[0]%'";
            if(count($key)>1){
                    $sql= "$sql"."AND TenLoai like'$key[1]%'";
                }
           $sql="$sql"."LIMIT 10";
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_loai(){
            $sql="SELECT COUNT(MaLoai) as total FROM loaisp";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM loaisp LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>