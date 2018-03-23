<?php
    require_once("Control/masterpagetren.php");
    require_once("../BLL/Quantrivien.php");
    
    $dt=new BLL_Quantrivien();
   
    $soqtv=$dt->getqtv();
       
?>

<div class="container-fluid">
    <h3>Danh sách quản trị viên</h3>
    <a href="Quantrivien_them.php"><input type="button" value="them" name="btnthem" class="btn-xsm btn-success"/></a>
    <input type="submit" value="xoa" name="btnxoa" class="btn-xsm btn-danger"/> 
    
</div>
<div class="container-fluid"> 
    <div class="panel">
        <div class="panel-body">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr style="background-color: lightgoldenrodyellow">
                        <td><input type="checkbox" name="cball" class="cs1" id="cball"/></td>
                        <td>Username</td>
                        <!--<td>Password</td>-->
                        <td>HoTen</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     
                         while($r=mysqli_fetch_array($soqtv)){
                        echo "<tr>";
                        ?>
                        <td>
                        <input type="checkbox" name="cb[]" class="checkbox cs1" value="<?php echo $r[0]?>">
                        </td>
                        <?php
                        echo "<td>".$r[0]."</td><td>".$r[2]."</td><td>".$r[3]."</td>";
                        ?>
                        <td><a href="Quantrivien_sua.php?u=<?php echo "$r[0]"?>" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-edit"></i></a></td></tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
       
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
require_once("../BLL/Quantrivien.php");
require_once("../Entities/Quantrivien.php");
    $loai=new BLL_Quantrivien();
    $loaisp=new Entities_Quantrivien();
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
            $loaisp->username=$d;
            
            $loai->xoaqtv($loaisp);
            }?>
            <script>
                alert("Xóa thành công");
                
            </script>
         
        <?php
        // header('Location: svweb.utehy:DoAn4/Admin/Loaisp_ds.php');
        }
    }
   
?>

<?php
require_once("../BLL/Quantrivien.php");
require_once("../Entities/Quantrivien.php");
    $loai=new BLL_Quantrivien();
    $loaisp=new Entities_Quantrivien();
    if(isset($_POST["btnsua"])){
        $loaisp->username=$_POST["txtmaloai"];
        $loaisp->tenlo=$_POST["txttenloai"];
        $loai->sualoai($loaisp);
        // header('Location:svwweb.utehy/Loaisp_ds.php');
        // echo"$loaisp->maloai,$loaisp->tenloai";
    }
?>

<?php

    require_once("Control/masterpageduoi.php");
?>