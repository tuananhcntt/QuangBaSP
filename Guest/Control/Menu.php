<?php
require_once("../BLL/Loaisp.php");
require_once("../BLL/Nhomsp.php");
$lsp=new BLL_Loaisp();$nsp=new BLL_Nhomsp();
$dm=$lsp->getloai();
?>

<nav class="navbar" data-spy="affix" data-offset-top="180">
<ul class="nav navbar-left navbar-nav nav-tabs">
    <?php
    while($r=mysqli_fetch_array($dm)){
        
    ?>
  <li class="dropdown">
    <a style="color:#43B062" href="#" class=" dropdown-toggle" type="button" data-toggle="dropdown"><label><?php echo "$r[1]"?></label>
    </a>
    <ul class="dropdown-menu" style="opacity: 0.9;box-shadow:0px 0px 10px white;">
        <?php
        $dmc=$nsp->gettheoloai($r[0]);
        while($rn=mysqli_fetch_array($dmc)){
        ?>
      <li><a href="Nhom.php?DM=<?php echo "$rn[0]"?>" style="color:#43B062"><?php echo "$rn[2]"?></a></li>
      <?php } ?>
    </ul>
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