<?php
    require_once("../Entities/Nhaphanphoi.php");
    require_once("config.php");
    class DAL_Nhaphanphoisp{
        public $dt;
        function DAL_Nhaphanphoisp(){
            $this->dt=new config();
        }
        public function them(Entities_NPP $npp){
            $ssql="INSERT INTO nhaphanphoi VALUES( N'$npp->manpp', N'$npp->tennpp', '$npp->sdt', N'$npp->diachi', '$npp->email')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_NPP $npp){
            $sql="UPDATE nhaphanphoi SET TenNPP='$npp->tennpp', SDT='$npp->sdt', DiaChi='$npp->diachi', Email='$npp->email' WHERE MaNPP='$npp->manpp'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_NPP $npp){
            $sql="DELETE FROM nhaphanphoi Where MaNPP='$npp->manpp'";
            return mysqli_query($dt,$sql);
        }
        public function kt(Entities_NPP $npp){
            $sql="SELECT COUNT(MaNPP) as sl FROM nhaphanphoi where MaNPP='$npp->manpp'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM nhaphanphoi ORDER BY MaNPP DESC";
            return $this->dt->excute($sql);
        }
        public function tim($key){
             $sql="SELECT * FROM nhaphanphoi WHERE TenNPP like'$key[0]%'OR MaNPP like'$key[0]%'";
            if(count($key)>1){
                    $sql= "$sql"."AND TenNPP like'$key[1]%'";
                }
           $sql="$sql"."LIMIT 10";
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_npp(){
            $sql="SELECT COUNT(MaNPP) as total FROM nhaphanphoi";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM nhaphanphoi LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>