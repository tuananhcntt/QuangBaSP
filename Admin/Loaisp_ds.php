
<?php
    require_once("Control/masterpagetren.php");
    require_once("../BLL/Loaisp.php");
    
    $dt=new BLL_Loaisp();
   
    $soloai=$dt->soloai();
        $row = mysqli_fetch_array($soloai);
        $sl = $row['total'];
        $current_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $limit = 10;
    $sopage = ceil($sl / $limit);
    if ($current_page > $sopage){
            $current_page = $sopage;
        }
    else if ($current_page < 1){
            $current_page = 1;
        }
    $start = ($current_page - 1) * $limit;
    $dlpage=$dt->dlpage($start,$limit);
?>

<div class="container-fluid">
    <h3>Danh sách loại sản phẩm</h3>
    <a href="Loaisp_them.php"><input type="button" value="them" name="btnthem" class="btn-xsm btn-success"/></a>
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
                        <td>Mã loại sản phẩm</td>
                        <td>Tên loại sản phẩm</td>
                        <td>sua</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     if(isset($_POST["btntk"])){
                        $arr=$_REQUEST['txttk'];
                            $key=explode("+",$arr);
                            
                            $dlpage=$dt->timloai($key);
                     }
                         while($r=mysqli_fetch_array($dlpage)){
                        echo "<tr>";
                        ?>
                        <td>
                        <input type="checkbox" name="cb[]" class="checkbox cs1" value="<?php echo $r[0]?>">
                        </td>
                        <?php
                        echo "<td>".$r[0]."</td><td>".$r[1]."</td>";
                        ?>
                        <td><a href="Loaisp_sua.php?u=<?php echo "$r[0]"?>" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-edit"></i></a></td></tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
        <ul class="pagination pull-right">
        <?php
        if ($current_page > 1 && $sopage > 1){
                echo '<li><a class="cs" href="Loaisp_ds.php?page='.($current_page-1).'">&laquo;</a></li>';
            }
        for ($i = 1; $i <= $sopage; $i++){
                if ($i == $current_page){
                    echo '<li><a style="background-color:#e8e8e8">'.$i.'</a></li>';
                }
                else{
                    echo '<li><a class="cs" href="Loaisp_ds.php?page='.$i.'">'.$i.'</a></li>';
                }
            }
        if ($current_page < $sopage && $sopage > 1){
                echo '<li><a class="cs" href="Loaisp_ds.php?page='.($current_page+1).'">&raquo;</a><li>';
            }
       
        ?>
        </ul>
    </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--het modal-->
<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
<script language="JavaScript">
    $("#cball").change(function(){  
    var status = this.checked; 
    $('.checkbox').each(function(){ 
        this.checked = status; 
    });
});
</script>

<?php
require_once("../BLL/Loaisp.php");
require_once("../Entities/Loaisp.php");
    $loai=new BLL_Loaisp();
    $loaisp=new Entities_Loaisp();
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
            $loaisp->maloai=$d;
            $loai->xoaloai($loaisp);
            }?>           
            <script> 
                window.location = "Loaisp_ds.php"; 
            </script>
         
        <?php
        // header('Location: svweb.utehy:DoAn4/Admin/Loaisp_ds.php');
        }
    }
   
?>

<?php
require_once("../BLL/Loaisp.php");
require_once("../Entities/Loaisp.php");
    $loai=new BLL_Loaisp();
    $loaisp=new Entities_Loaisp();
    if(isset($_POST["btnsua"])){
        $loaisp->maloai=$_POST["txtmaloai"];
        $loaisp->tenloai=$_POST["txttenloai"];
        $loai->sualoai($loaisp);
        ?>
        <script> 
            window.location = "Loaisp_ds.php"; 
        </script>
    <?php
    }
?>

<?php

    require_once("Control/masterpageduoi.php");
?>