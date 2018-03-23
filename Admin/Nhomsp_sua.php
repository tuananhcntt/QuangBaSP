<?php
    include_once("Control/masterpagetren.php");
    require_once("../BLL/Loaisp.php");
    $chon=new BLL_Loaisp();
    $row=$chon->getloai();
?>

<div class="col-md-1"></div>

    <div class="container-fluid" style="margin:auto">
            <div class="col-sm-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Sửa nhóm sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã nhóm sản phẩm</label>
                            <input type="text" name="txtmaloai" readonly="readonly" value=<?php echo $_REQUEST['u']?> class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Tên nhóm sản phẩm</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select name="loai" class="form-control cs">
                                <option value="">--Loại sản phẩm--</option>
                                    <?php
                                        foreach($row as $r)
                                        echo "<option value=".$r['MaLoai'].">".$r['TenLoai']."</option>";
                                    ?>
                            </select>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" value="Thêm/ cập nhật" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once("../BLL/Nhomsp.php");
require_once("../Entities/Nhomsp.php");
    $nhom=new BLL_Nhomsp();
    $nhomsp=new Entities_Nhomsp();
    
    if(isset($_POST["btnthem"])){
        $nhomsp->manhom=$_POST["txtmaloai"];
        $nhomsp->tennhom=$_POST["txttenloai"];
        $nhomsp->maloai=$_POST["loai"];
        $sonhom=$nhom->kiemtra($nhomsp);
        $row=mysqli_fetch_array($sonhom);
        if($row['sl']<=0){
            ?>
            <script>
            a=prompt('Mã này không tồn tại, bạn có thể nhập mã mới tại đây');
            if(a==""){
                alert("Bạn đã không nhập mã, thao tác thêm bị hủy");
            }
            
            // document.write(a);
            </script>
            <?php
            echo "<script>document.write(a)</script>";
        }
        else{
        $nhom->suanhom($nhomsp);
        echo "$nhomsp->manhom,$nhomsp->tennhom,$nhomsp->maloai";
        }
    }
?>

<?php
    include_once("Control/masterpageduoi.php");
?>