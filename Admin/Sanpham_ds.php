
<?php
    require_once("Control/masterpagetren.php");
    require_once("../BLL/Sanpham.php");
    $dt=new BLL_Sanpham();
    $soloai=$dt->sosanpham();
        $row = mysqli_fetch_array($soloai);
        $sl = $row['total'];
        $current_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $limit = 10;
    $sopage = ceil($sl / $limit);
    if ($current_page > $sopage){
            $current_page = $sopage;
        }
    elseif ($current_page < 1){
            $current_page = 1;
        }
    $start = ($current_page - 1) * $limit;
    $dlpage=$dt->dlpage($start,$limit);
?>

<div class="container-fluid">
    <h3>Danh sách sản phẩm</h3>
    <a href="Sanpham_them.php"><input type="button" value="them" name="btnthem" class="btn-xsm btn-success"/></a>
    <input type="submit" value="xoa" name="btnxoa" class="btn-xsm btn-danger"/> 
    <div style="float: right;margin-bottom: 0.5cm">
        <input type="search" name="txttk" class="cs"/>
        <input type="submit" name="btntk" id="btntk" class="btn-xsm btn-warning" value="Tìm kiếm"/>
    </div>
</div>
<div class="container-fluid"> 
    <div class="panel">
        <div class="panel-body">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr style="background-color: lightgoldenrodyellow">
                        <td><input type="checkbox" name="cball" class="cs1" id="cball"/></td>
                        <td>Mã sản phẩm</td>
                        <td>Mã nhóm</td>
                        <td>Mã nhà phân phối</td>
                        <td>Tên sản phẩm</td>
                        <td>Đặc điểm</td>
                        <td>Phụ kiện</td>
                        <td>Giá</td>
                        <td>Khuyến mại</td>
                        <td>sua</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     if(isset($_POST["btntk"])){
                        $arr=$_REQUEST['txttk'];
                            $key=explode("+",$arr);
                            print_r($key);
                            $dlpage=$dt->timsanpham($key);
                     }
                         while($r=mysqli_fetch_array($dlpage)){
                        echo "<tr>";
                        ?>
                        <td>
                        <input type="checkbox" name="cb[]" class="checkbox cs1" value="<?php echo $r[0]?>">
                        </td>
                        <?php
                        echo "<td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td>";
                        ?>
                        <td><a href="Sanpham_sua.php?u=<?php echo "$r[0]"?>"><i class="glyphicon glyphicon-edit"></i></td></a></tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
        <ul class="pagination pull-right">
        <?php
        if ($current_page > 1 && $sopage > 1){
                echo '<li><a class="cs" href="Sanpham_ds.php?page='.($current_page-1).'">&laquo;</a></li>';
            }
        for ($i = 1; $i <= $sopage; $i++){
                if ($i == $current_page){
                    echo '<li><a style="background-color:#e8e8e8">'.$i.'</a></li>';
                }
                else{
                    echo '<li><a class="cs" href="Sanpham_ds.php?page='.$i.'">'.$i.'</a></li>';
                }
            }
        if ($current_page < $sopage && $sopage > 1){
                echo '<li><a class="cs" href="Sanpham_ds.php?page='.($current_page+1).'">&raquo;</a><li>';
            }
       
        ?>
        </ul>
    </div>
</div>

<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
<script language="JavaScript">
    $("#cball").change(function(){  
    var status = this.checked; 
    $('.checkbox').each(function(){ 
        this.checked = status; 
    });
});
</script>
<script>
            
            
        </script>
<?php
require_once("../BLL/Sanpham.php");
require_once("../Entities/Sanpham.php");
    $loai=new BLL_Sanpham();
    $loaisp=new Entities_Sanpham();
    $xoa="";
    if(isset($_POST['btnxoa'])){
        ?>
        <script>
            $('.checkbox').each(function(){ 
                if(this.checked = true;){
                <?php
                    $xoa=$_POST['cb'];
                ?>
                }
            });
        </script>
        <?php
        if($xoa==""){
            ?>
            <script>
                alert("Hãy chọn đối tượng để xóa");
            </script>
            <?php
        }
        elseif($xoa!=""){
            ?>
            <script>
                confirm("Xóa các đối tượng đã chọn");
            </script>
            <?php
            foreach($xoa as $d){
            $loaisp->ma=$d;
            // echo "$loaisp->maloai";
            $loai->xoasanpham($loaisp);
            }?>
            <script>
                alert("Xóa thành công");
            </script>
        <!-- header('Location: http://svweb.utehy:DoAn4/Admin/Loaisp_ds.php');-->
        <?php
        }
    }
?>
<?php
    require_once("Control/masterpageduoi.php");
?>