<?php
    require_once("../Entities/Sanpham.php");
    require_once("config.php");
    class DAL_Sanpham{
        public $dt;
        function DAL_Sanpham(){
            $this->dt=new config();
        }
        public function them(Entities_Sanpham $sp){
            $ssql="INSERT INTO sanpham VALUES('$sp->ma','$sp->manhom','$sp->manpp','$sp->tensp','$sp->dacdiem','$sp->phukien','$sp->gia','$sp->khuyenmai')";
            return $this->dt->excute($ssql);
        }
        public function sua(Entities_Sanpham $sp){
            $sql="UPDATE sanpham SET MaNhom='$sp->manhom', MaNPP='$sp->manpp', TenSP='$sp->tensp', DacDiem='$sp->dacdiem', PhuKien='$sp->phukien', Gia='$sp->gia', KhuyenMai='$sp->khuyenmai' WHERE MaSP='$sp->ma'";
            return $this->dt->excute($sql);
        }
        public function xoa(Entities_Sanpham $sp){
            $sql="DELETE FROM sanpham Where MaSP='$sp->ma'";
            return $this->dt->excute($sql);
        }
        public function get(){
            $sql="SELECT * FROM sanpham ORDER BY MaSP DESC";
            return $this->dt->excute($sql);
        }
        public function get_slide(){
            $sql="SELECT * FROM sanpham LEFT JOIN albumanh on sanpham.MaSP=albumanh.MaSP ORDER BY RAND() Limit 6";
            return $this->dt->excute($sql);
        }
        public function getrand(){
            $sql="SELECT sanpham.MaSP, sanpham.TenSP, sanpham.Gia, albumanh.TenAnh, thongsokythuat.* FROM sanpham LEFT JOIN albumanh on sanpham.MaSP=albumanh.MaSP LEFT JOIN thongsokythuat on sanpham.MaSP=thongsokythuat.MaSP ORDER BY RAND() LIMIT 12";
            return $this->dt->excute($sql);
        }
        public function getnhom($manhom){
            $sql="SELECT sanpham.MaSP, sanpham.TenSP, sanpham.Gia,albumanh.TenAnh, thongsokythuat.*, nhomsp.TenNhom FROM sanpham LEFT JOIN albumanh on sanpham.MaSP=albumanh.MaSP LEFT JOIN thongsokythuat on sanpham.MaSP=thongsokythuat.MaSP left join nhomsp on sanpham.MaNhom=nhomsp.Manhom Where sanpham.MaNhom='$manhom' ORDER BY RAND() LIMIT 12";
            return $this->dt->excute($sql);
        }
        public function getloai($maloai){
            $sql="SELECT sanpham.MaSP, sanpham.TenSP, sanpham.Gia,albumanh.TenAnh, thongsokythuat.*, nhomsp.TenNhom FROM sanpham LEFT JOIN albumanh on sanpham.MaSP=albumanh.MaSP LEFT JOIN thongsokythuat on sanpham.MaSP=thongsokythuat.MaSP left join nhomsp on sanpham.MaNhom=nhomsp.Manhom Where nhomsp.MaLoai='$maloai' ORDER BY RAND()";
             return $this->dt->excute($sql);
        }
        public function getct($sp){
            $sql="SELECT sanpham.MaSP, sanpham.TenSP, sanpham.Gia,sanpham.DacDiemNoiBat,sanpham.PhuKien,sanpham.KhuyenMai, albumanh.TenAnh, thongsokythuat.*,nhaphanphoi.*  FROM sanpham LEFT JOIN albumanh on sanpham.MaSP=albumanh.MaSP LEFT JOIN thongsokythuat on sanpham.MaSP=thongsokythuat.MaSP left join nhaphanphoi on sanpham.MaNPP=nhaphanphoi.MaNPP where sanpham.MaSP='$sp' ORDER BY RAND()";
            return $this->dt->excute($sql);
        }
        public function kt(Entities_Sanpham $sp){
             $sql="SELECT COUNT(Masp) as sl FROM sanpham WHERE MaSP='$sp->ma'";
            return $this->dt->excute($sql);
        }
        public function tim($key){
            $sql="SELECT * FROM Sanpham WHERE MaSP like'$key[0]%' OR TenSP like'$key[0]%'";
            if(count($key)>1){
                    $sql= "MaSP like'$key[0]%'"."AND TenSP like'$key[1]%'";
                }
            $sql="$sql"."LIMIT 0,10";
            return $this->dt->excute($sql);
        }
        //phục vụ phân trang
        public function so_sp(){
            $sql="SELECT COUNT(MaSP) as total FROM sanpham";
            return $this->dt->excute($sql);
        }
        public function dl_page($start,$limit){
            $sql="SELECT * FROM sanpham LIMIT $start, $limit";
            return $this->dt->excute($sql);
        }
    }
?>