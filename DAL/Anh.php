<?php
    require_once("../Entities/Anh.php");
    require_once("config.php");
    class DAL_Anh{
        public $dt;
        function DAL_Anh(){
            $this->dt=new config();
        }
        public function them(Entities_Anh $anh){
            $ssql="INSERT INTO Anh VALUES('$anh->maanh','$anh->masp','$anh->tenanh')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Anh $anh){
            $sql="UPDATE Anh SET TenAnh='$anh->tenanh', MaSP='$anh->masp' WHERE MaAnh='$anh->maanh'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Anh $anh){
            $sql="DELETE FROM Anh Where MaAnh='$anh->maanh'";
            return mysqli_query($dt,$sql);
        }
        public function get(){
            $sql="SELECT * FROM Anh";
            return $this->dt->excute($sql);
        }
        public function tim($key){
            $sql="SELECT * FROM Anh WHERE MaAnh='$key'";
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_anh(){
            $sql="SELECT COUNT(MaAnh) as total FROM albumanh";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM albumanh LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>