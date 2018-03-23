<?php
    include_once("Control/masterpagetren.php");
?>

<div class="col-md-1"></div>

    <div class="container-fluid" style="margin:auto">
            <div class="col-sm-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Thêm nhà phân phối
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã nhà phân phối</label>
                            <input type="text" name="txtmanpp" class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Tên nhà phân phối</label>
                            <input type="text" name="txttennpp" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="txtsdt" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="txtdiachi" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="txtemail" class="form-control cs"/>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" value="Thêm/ cập nhật" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once("../BLL/Nhaphanphoi.php");
require_once("../Entities/Nhaphanphoi.php");
    $npp=new BLL_NPP();
    $nppsp=new Entities_NPP();
    
    if(isset($_POST["btnthem"])){
        $nppsp->manpp=$_POST["txtmanpp"];
        $nppsp->tennpp=$_POST["txttennpp"];
        $nppsp->sdt=$_POST["txtsdt"];
        $nppsp->diachi=$_POST["txtdiachi"];
        $nppsp->email=$_POST["txtemail"];
        $sonpp=$npp->kiemtra($nppsp);
        $row=mysqli_fetch_array($sonpp);
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
        $npp->themnpp($nppsp);
        echo "$nppsp->manpp,$nppsp->tennpp,$nppsp->sdt,$nppsp->diachi,$nppsp->email";
        }
    }
?>

<?php
    include_once("Control/masterpageduoi.php");
?>