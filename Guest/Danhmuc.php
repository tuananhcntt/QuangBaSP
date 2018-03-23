<?php
include_once("matsterPage/pagetren.php");

?>
<div style="width:100%;float:right;">
    <?php
    include("Control/Menucon.php");
    ?>
</div>
<?php
    require_once("../BLL/Sanpham.php");
    $loai=new BLL_Sanpham();
    $l=$_REQUEST['DM'];
    $lsp=$loai->gettheoloai($l);
    while ($rdm=mysqli_fetch_array($lsp)) {
        ?>
        <a href="Chitiet.php?sp=<?php echo"$rdm[0]"?>" class="col-sm-4 khungtrongitem" style="width:32%; height:300px">
        <div>
            <div class="col-sm-5">
                <img style="height: auto" src="../image/<?php echo"$rdm[3]" ?>.png">;
                <div class="rown">
                    <h4>
                    <?php echo"$rdm[1]"?>
                    </h4>
                </div>
                <div class="rown">
                    <div style="color:red">
                        <?php echo"$rdm[2].000.000 đ"?>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 dobong" style="color:#808080">
                <div class="rown">
                    <h4>
                    <?php echo"$rdm[1]"?>
                    </h4>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[5]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[6]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[7]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[8]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[9]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[10]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[11]"?>
                </div>
                <div class="rown">
                    <?php echo"-$rdm[12]"?>
                </div>
            </div>
        </div>
        
    </a>
        <?php
    }
?>
<div>

</div>
<?php
include_once("matsterPage/pageduoi.php");
?>