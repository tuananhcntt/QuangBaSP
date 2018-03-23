<?php
    include_once("Control/masterpagetren.php");
?>

<div class="col-md-1"></div>

    <div class="container-fluid" style="margin:auto">
            <div class="col-sm-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Thêm loại sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã loại sản phẩm</label>
                            <input type="text" name="txtmaloai" class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Tên loại sản phẩm</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" value="Thêm" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once("../BLL/Loaisp.php");
require_once("../Entities/Loaisp.php");
    $loai=new BLL_Loaisp();
    $loaisp=new Entities_Loaisp();
    
    if(isset($_POST["btnthem"])){
        $loaisp->maloai=$_POST["txtmaloai"];
        $loaisp->tenloai=$_POST["txttenloai"];
        $soloai=$loai->kiemtra($loaisp);
        $row=mysqli_fetch_array($soloai);
        if($row['sl']>0){
            ?>
            <script>
            alert('Mã này đã tồn tại');
            </script>
            <?php
            
        }
        else{
        $loai->themloai($loaisp);
        echo " thêm thành công:$loaisp->maloai,$loaisp->tenloai";
        ?>
        <script>
            window.location = "Loaisp_ds.php";
        </script>
        <?php
        }
    }
?>

<?php
    include_once("Control/masterpageduoi.php");
?>