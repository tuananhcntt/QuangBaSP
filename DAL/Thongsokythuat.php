<?php
    require_once("../Entities/Thongsokythuat.php");
    require_once("config.php");
    class DAL_Thongsokythuat{
        public $dt;
        function DAL_Thongsokythuat(){
            $this->dt=new config();
        }
        public function them(Entities_Thongsokythuat $tskt){
            $ssql="INSERT INTO thongsokythuat VALUES('$tskt->matskt','$tskt->manhinh','$tskt->camera','$tskt->ram','$tskt->bonhotrong','$tskt->hedieuhanh','$tskt->chipset','$tskt->kichthuoc','$tskt->masp')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Thongsokythuat $tskt){
            $sql="UPDATE thongsokythuat SET ManHinh='$tskt->manhinh', Camera='$tskt->camera', RAM='$tskt->ram', BoNhoTrong='$tskt->bonhotrong', HeDieuHanh='$tskt->hedieuhanh', Chipset='$tskt->chipset', CPU='$tskt->kichthuoc', MaSP='$tskt->masp' WHERE MaTSKT='$tskt->matskt'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Thongsokythuat $tskt){
            $sql="DELETE FROM thongsokythuat Where MaTSKT='$tskt->matskt'";
            return $this->dt->excute($sql);
        }
        public function kt(Entities_Thongsokythuat $tskt){
            $sql="SELECT COUNT(MaTSKT) as sl FROM thongsokythuat where MaTSKT='$tskt->matskt'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM thongsokythuat ORDER BY MaTSKT DESC";
            return $this->dt->excute($sql);
        }
        public function tim($key){
            $sql="SELECT * FROM thongsokythuat WHERE TenTSKT like '$key[0]%'OR MaTSKT like'$key[0]%'";
            if(count($key)>1){
                    $sql= "MaTSKT like'$key[0]%'"."AND TenTSKT like'$key[1]%'";
                }
           
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_tskt(){
            $sql="SELECT COUNT(MaTSKT) as total FROM thongsokythuat";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM thongsokythuat LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>