
<?php
require_once("../BLL/Loaisp.php");
require_once("../BLL/Nhomsp.php");
$nsp=new BLL_Nhomsp();
$dm=$_REQUEST['DM']?$_REQUEST['DM']:"";
$dmc=$nsp->gettheoloai($dm);
       
?>
<nav class="top_menu" style="float:right; margin-top:0px;padding-top:0px; width:auto;">
        <ul class="nav-center">
        <?php
           while($rn=mysqli_fetch_array($dmc)){
          ?>
            <li class="dobong"><a href="Nhom.php?N=<?php echo"$rn[0]"?>"><?php echo"$rn[2]"?></a></li>
          <?php
           }
        ?>
        </ul>
      </nav>
<br />
