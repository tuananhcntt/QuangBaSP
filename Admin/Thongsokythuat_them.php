<?php
include_once("Control/masterpagetren.php");
    require_once("../BLL/Sanpham.php");
    $sanpham=new BLL_Sanpham();
    $rowsp=$sanpham->getsanpham();
?>
 <div class="container-fluid">
 <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Cập nhật thông số kỹ thuật
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã thông số kỹ thuật</label>
                            <input type="text" name="txtmatskt" class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Màn hình</label>
                            <input type="text" name="txtmanhinh" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Camera</label>
                            <input type="text" name="txtcamera" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>RAM</label>
                            <input type="text" name="txtram" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Bộ nhớ trong</label>
                            <input type="text" name="txtbonhotrong" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Hệ điều hành</label>
                            <input type="text" name="txthedieuhanh" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Chipset</label>
                            <input type="text" name="txtchipset" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>CPU</label>
                            <input type="text" name="txtcpu" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Kích thước</label>
                            <input type="text" name="txtkichthuoc" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Chọn sản phẩm</label>
                            <select name="sp" class="form-control cs">
                                <option value="">--Sản phẩm--</option>
                                    <?php
                                        foreach($rowsp as $rsp)
                                        echo "<option value=".$rsp['MaSP'].">".$rsp['TenSP']."</option>";
                                    ?>
                            </select>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" value="Thêm" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require_once("../BLL/Thongsokythuat.php");
require_once("../Entities/Thongsokythuat.php");
    $thongso=new BLL_Thongsokythuat();
    $ts=new Entities_Thongsokythuat();
    
    if(isset($_POST["btnthem"])){
        $ts->matskt=$_POST["txtmatskt"];
        $ts->manhinh=$_POST["txtmanhinh"];
        $ts->camera=$_POST["txtcamera"];
        $ts->ram=$_POST["txtram"];
        $ts->bonhotrong=$_POST["txtbonhotrong"];
        $ts->hedieuhanh=$_POST["txthedieuhanh"];
        $ts->chipset=$_POST["txtchipset"];
        $ts->cpu=$_POST["txtcpu"];
        $ts->kichthuoc=$_POST["txtkichthuoc"];
        $ts->masp=$_POST["sp"];
        $sotskt=$thongso->kiemtra($ts);
        $row=mysqli_fetch_array($sotskt);
        if($row['sl']>0){
            ?>
            <script>
            a=prompt('Mã này đã tồn tại, bạn có thể nhập mã mới tại đây');
            if(a==""){
                alert("Bạn đã không nhập mã, thao tác thêm bị hủy");
            }
            if(a==null){
                alert("thao tác thêm bị hủy");
            }
            // document.write(a);
            </script>
            <?php
            echo "<script>document.write(a)</script>";
        }
        else{
        $thongso->themtskt($ts);
        echo "$ts->matskt,$ts->manhinh,$ts->camera,$ts->ram,$ts->bonhotrong,$ts->hedieuhanh,$ts->chipset,$ts->cpu,$ts->kichthuoc,$ts->masp";
        }
    }
?>        
<?php
include_once("Control/masterpageduoi.php");
?>