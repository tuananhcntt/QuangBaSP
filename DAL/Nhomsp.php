<?php
    require_once("../Entities/Nhomsp.php");
    require_once("config.php");
    class DAL_Nhomsp{
        public $dt;
        function DAL_Nhomsp(){
            $this->dt=new config();
        }
        public function them(Entities_Nhomsp $nhom){
            $ssql="INSERT INTO nhomsp VALUES('$nhom->manhom','$nhom->maloai','$nhom->tennhom')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Nhomsp $nhom){
            $sql="UPDATE nhomsp SET TenNhom='$nhom->tennhom', MaLoai='$nhom->maloai' WHERE MaNhom='$nhom->manhom'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Nhomsp $nhom){
            $sql="DELETE FROM nhomsp Where MaNhom='$nhom->manhom'";
            return mysqli_query($dt,$sql);
        }
        public function kt(Entities_Nhomsp $nhom){
            $sql="SELECT COUNT(MaNhom) as sl FROM nhomsp where MaNhom='$nhom->manhom'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM nhomsp ORDER BY MaNhom DESC";
            return $this->dt->excute($sql);
        }
        public function get1($loai){
             $sql="SELECT * FROM nhomsp where MaLoai='$loai'";
            return $this->dt->excute($sql);
        }
        public function get2($nhom){
             $sql="SELECT * FROM nhomsp where MaNhom='$nhom'";
            return $this->dt->excute($sql);
        }
        public function tim($key){
           $sql="SELECT * FROM nhomsp WHERE TenNhom like'$key[0]%'OR MaNhom like'$key[0]%'";
            if(count($key)>1){
                    $sql= "$sql"."AND TenNhom like'$key[1]%'";
                }
           $sql="$sql"."LIMIT 10";
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_nhom(){
            $sql="SELECT COUNT(MaNhom) as total FROM nhomsp";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM nhomsp LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>