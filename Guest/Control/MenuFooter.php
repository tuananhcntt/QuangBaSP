<?php
require_once("../BLL/Loaisp.php");
require_once("../BLL/Nhomsp.php");
$lsp=new BLL_Loaisp();$nsp=new BLL_Nhomsp();
$dm=$lsp->getloai();
?>
<div class="footer_menu" style="text-align:center">
  <ul id="f_menu">
  <?php
     while($r=mysqli_fetch_array($dm)){
  ?>
    <li><a href="#"><?php echo "$r[1]"?></a></li>
    <?php } ?>
  </ul>
</div>