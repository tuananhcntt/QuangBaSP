<?php
    require_once("../Entities/Quantrivien.php");
    require_once("config.php");
    class DAL_Quantrivien{
        public $dt;
        function DAL_Quantrivien(){
            $this->dt=new config();
        }
        public function them(Entities_Quantrivien $qtv){
            $ssql="INSERT INTO quantrivien VALUES('$qtv->username', '$qtv->password','$qtv->hoten','$qtv->email')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Sanpham $qtv){
            $sql="UPDATE quantrivien SET Password='$qtv->password', HoTen='$qtv->hoten', Email='$qtv->email' WHERE Username='$qtv->username'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Quantrivien $qtv){
            $sql="DELETE FROM quantrivien Where Username='$qtv->username'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM quantrivien ORDER BY Username DESC";
            return $this->dt->excute($sql);
        }
        public function tim($key){
            $sql="SELECT * FROM quantrivien WHERE Username like'$key[0]%' OR HoTen like'$key[0]%'";
            if(count($key)>1){
                    $sql= "$sql"."OR (Username like'$key[0]%'"."AND HoTen like'$key[1]%')";
                }
            $sql="$sql"."LIMIT 0,10";
            return $this->dt->excute($sql);
        }
        public function kt(Entities_Quantrivien $qtv){
            $sql="SELECT COUNT(Username) as sl FROM quantrivien Where Username='$qtv->username'";
            return $this->dt->excute($sql);
        }
        public function log(Entities_Quantrivien $qtv){
            $sql="SELECT COUNT(Username) as sl1 FROM quantrivien Where Username='$qtv->username' and Password='$qtv->password'";
            return $this->dt->excute($sql);
        }
         public function so_qtv(){
            $sql="SELECT COUNT(MaQTV) as total FROM quantrivien";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM quantrivien LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>