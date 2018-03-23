<?php
include_once("matsterPage/pagetren.php");
    require_once("../BLL/Sanpham.php");
$manhom=$_REQUEST['N'];
 $spr=new BLL_Sanpham();
    $rr=$spr->gettheonhom($manhom);
    require_once("../BLL/Nhomsp.php");
    $nhom=new BLL_NhomSP();
    $rn=$nhom->gettennhom($manhom);
    
    while($rn1=mysqli_fetch_array($rn)){
        ?>
        <div>
            <h5 class="dobong" style="float:right;width:auto; color:red"><?php echo"$rn1[2]"?></h5>
        </div>
        <?php
    }
?>

    
    
<?php
while ($rrd=mysqli_fetch_array($rr)) {
    ?>
    
    <div class="col-sm-4 khungtrongitem" style="width:32%; height:300px">
        <a href="Chitiet.php?sp=<?php echo"$rrd[0]"?>">
            <div class="col-sm-5">
                <img style="height: auto" src="../image/<?php echo"$rrd[3]" ?>.png">;
                <div class="rown">
                    <h4>
                    <?php echo"$rrd[1]"?>
                    </h4>
                </div>
                <div class="rown">
                    <div style="color:red">
                        <?php echo"$rrd[2].000.000 đ"?>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 dobong" style="color:#808080">
                <div class="rown">
                    <h4>
                    <?php echo"$rrd[1]"?>
                    </h4>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[5]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[6]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[7]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[8]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[9]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[10]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[11]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rrd[12]"?>
                </div>
            </div>
        </a>
        
    </div>
    <?php
}
?>  

<?php
include_once("matsterPage/pageduoi.php");
?>