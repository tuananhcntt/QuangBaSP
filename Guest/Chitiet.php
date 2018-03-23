<?php
include_once("matsterPage/pagetren.php");
require_once("../BLL/Sanpham.php");
$load=new BLL_Sanpham();
$sp=$_REQUEST['sp'];
$ct=$load->getchitiet($sp);
while($r=mysqli_fetch_array($ct)){
?>
<div style="margin:auto; background:white">
    
    <div class="rown col-md-12"style="margin:auto">
        <h2>
        <?php echo"$r[1]"?>
        </h2>
        <div class="col-md-4">
            <img style="height:400px" src="../image/<?php echo"$r[6]"?>.png">;
        </div>
        
        <div class="col-md-4">
            <h2>Thông số kỹ thuật</h2>
            <table class="table">
                    <tr>
                        <td>Màn Hình:</td>
                        <td><?php echo"$r[8]"?></td>
                    </tr>
                    <tr>
                        <td>Camera:</td>
                        <td><?php echo"$r[9]"?></td>
                    </tr>
                    <tr>
                        <td>RAM:</td>
                        <td><?php echo"$r[10]"?></td>
                    </tr>
                    <tr>
                        <td>Bộ Nhớ Trong:</td>
                        <td><?php echo"$r[11]"?></td>
                    </tr>
                    <tr>
                        <td>Hệ Điều Hành:</td>
                        <td><?php echo"$r[12]"?></td>
                    </tr>
                    <tr>
                        <td>Chipset:</td>
                        <td><?php echo"$r[13]"?></td>
                    </tr>
                    <tr>
                        <td>CPU:</td>
                        <td><?php echo"$r[14]"?></td>
                    </tr>
                    <tr>
                        <td>Kích Thước:</td>
                        <td><?php echo"$r[15]"?></td>
                    </tr>
            </table>
        </div>
        <div class="col-md-4">
            <h2 style="color:red"><?php echo"$r[2].000.000 đ"?></h2>
            <div>
                <h4 style="color:red"><?php echo"$r[5]"?></h4>
                <p>
                    <h3>Đặc điểm nổi bật:</h3>
                    <h4><?php echo"$r[3]"?></h4>
                </p>
                <p>
                    <h3>Phụ kiện:</h3>
                    <h4><?php echo"$r[4]"?></h4>
                </p>
                
            </div>
        </div>
    </div>
   
</div>
<?php
}
include_once("matsterPage/pageduoi.php");
?>