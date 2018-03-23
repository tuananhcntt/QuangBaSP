
<?php
    require_once("Control/masterpagetren.php");
    require_once("../BLL/Anh.php");
    
    $dt=new BLL_Anh();
   
    $soanh=$dt->soanh();
        $row = mysqli_fetch_array($soanh);
        $sl = $row['total'];
        $current_page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $limit = 15;
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
    <a href="anh_them.php"><input type="button" value="them" name="btnthem" class="btn-xsm btn-success"/></a>
    <input type="submit" value="xoa" name="btnxoa" class="btn-xsm btn-danger"/> 
    <div style="float: right;margin-bottom: 0.5cm">
        <input type="search" name="txttk" class="cs"/>
        <input type="submit" name="btntk" id="btntk" class="btn-xsm btn-warning" value="Tìm kiếm"/>
    </div>
</div>
<div class="container-fluid" style="margin: auto"> 
                    <?php
                     if(isset($_POST["btntk"])){
                        $arr=$_REQUEST['txttk'];
                            $key=explode("+",$arr);
                            print_r($key);
                            $dlpage=$dt->timanh($key);
                     }
                         while($r=mysqli_fetch_array($dlpage)){
                        ?>
                        <div>
                            <div class="col-md-2 cs1" style="margin:10px; background:white">
                                <img class="img-rounded rotate360" src="../image/<?php echo"$r[2]"?>.png" style="width: 150px; height:150px"/> 
                                <div style="width: 150px; height: 40px; background:white">
                                    <a href="#"><i class="glyphicon glyphicon-picture"></i><strong><?php echo"$r[2]"?></strong></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
        <ul class="pagination pull-right">
        <?php
        if ($current_page > 1 && $sopage > 1){
                echo '<li><a class="cs" href="Anh_ds.php?page='.($current_page-1).'">&laquo;</a></li>';
            }
        for ($i = 1; $i <= $sopage; $i++){
                if ($i == $current_page){
                    echo '<li><a style="background-color:#e8e8e8">'.$i.'</a></li>';
                }
                else{
                    echo '<li><a class="cs" href="Anh_ds.php?page='.$i.'">'.$i.'</a></li>';
                }
            }
        if ($current_page < $sopage && $sopage > 1){
                echo '<li><a class="cs" href="Anh_ds.php?page='.($current_page+1).'">&raquo;</a><li>';
            }
       
        ?>
        </ul>
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




<?php

    require_once("Control/masterpageduoi.php");
?>