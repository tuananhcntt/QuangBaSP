<?php
require_once("../BLL/Loaisp.php");
require_once("../BLL/Nhomsp.php");
$lsp=new BLL_Loaisp();$nsp=new BLL_Nhomsp();
$dm=$lsp->getloai();
?>

<nav class="navbar" data-spy="affix" data-offset-top="180">
<ul class="nav navbar-left nav-tabs">
    <?php
    while($r=mysqli_fetch_array($dm)){
        
    ?>
  <li>
    <a style="color:#43B062" href="Danhmuc.php?DM=<?php echo "$r[0]"?>"class=" dropdown-toggle" type="button"><label><?php echo "$r[1]"?></label>
    </a>
    
  </li>
  <?php
    }
  ?>
  </ul>
</nav>
<style>
.affix {
      top: 0; left:0;
      width: 100%;
      box-shadow:0px 0px 15px gray; 
      z-index:9999;
      background-color:white;
      opacity: 0.9;
  }

</style>