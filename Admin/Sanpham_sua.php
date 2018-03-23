<?php
    include_once("Control/masterpagetren.php");
    require_once("../BLL/Nhomsp.php");
    require_once("../BLL/Nhaphanphoi.php");
    $nhom=new BLL_Nhomsp();$npp=new BLL_NPP();
    $rownhom=$nhom->getnhom();$rownpp=$npp->getnpp();
?>
<div class="col-md-1"></div>
    <div class="container-fluid" style="margin:auto">
            <div class="col-sm-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Cập nhật sản phẩm
                    </div>
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <input type="text" name="txtma" id="txtma" readonly="readonly" value=<?php echo $_REQUEST['u'] ?> class="form-control cs">
                            <label id="lblma" style="color:red"></label>
                        </div>
                        <div class="form-group">
                            <label>Nhóm sản phẩm</label>
                            <select name="nhom" class="form-control cs">
                                <option value="">--Nhóm sản phẩm--</option>
                                    <?php
                                        foreach($rownhom as $rn)
                                        echo "<option value=".$rn['MaNhom'].">".$rn['TenNhom']."</option>";
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nhà phân phối</label>
                            <select name="npp" class="form-control cs">
                                <option value="">--Nhà phân phối--</option>
                                    <?php
                                        foreach($rownpp as $rnpp)
                                        echo "<option value=".$rnpp['MaNPP'].">".$rnpp['TenNPP']."</option>";
                                    ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="txttensp" class="form-control cs">
                            <label id="lbltensp"></label>
                        </div>
                        <div class="form-group">
                            <label>Đặc điểm nổi bật</label>
                            <input type="text" name="txtdacdiem" class="form-control cs">
                            <label id="lbldacdiem"></label>
                        </div>
                        <div class="form-group">
                            <label>Phụ kiện</label>
                            <input type="text" name="txtphukien" class="form-control cs">
                            <label id="lblphukien"></label>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="text" name="txtgia" class="form-control cs">
                            <label id="lblgia"></label>
                        </div>
                        <div class="form-group">
                            <label>Khuyến mại</label>
                            <input type="text" name="txtkhuyenmai" class="form-control cs">
                            <label id="lblkhuyenmai"></label>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" id="btnthem" value="Cập nhật" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once("../BLL/Sanpham.php");
require_once("../Entities/Sanpham.php");
    $sanpham=new BLL_Sanpham();
    $sp=new Entities_Sanpham();
    
    if(isset($_POST["btnthem"])){
        $sp->ma=$_POST["txtma"];
        $sp->manhom=$_POST["nhom"];
        $sp->manpp=$_POST["npp"];
        $sp->tensp=$_POST["txttensp"];
        $sp->dacdiem=$_POST["txtdacdiem"];
        $sp->phukien=$_POST["txtphukien"];
        $sp->gia=$_POST["txtgia"];
        $sp->khuyenmai=$_POST["txtkhuyenmai"];
        $sosp=$sanpham->kiemtra($sp);
        $row=mysqli_fetch_array($sosp);
        if($row['sl']<=0){
            ?>
            <script>
            a=prompt('Mã này không tồn tại, bạn có thể nhập mã mới tại đây');
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
        $sanpham->suasanpham($sp);
        echo "$sp->ma,$sp->manhom,$sp->manpp,$sp->tensp,$sp->dacdiem,$sp->phukien,$sp->gia,$sp->khuyenmai";
        }
    }
?>
<script>
// $(document).ready(function (){
    $("#btnthem").click(function(){
        var ma = $("#txtma").val();
        if(ma==" "){
            $("#lblma").html("mã không để trống");
            
            return false;
        }
    });
// });
</script>
<?php
    include_once("Control/masterpageduoi.php");
?>