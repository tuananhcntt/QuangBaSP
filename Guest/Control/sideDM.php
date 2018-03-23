<?php
require_once("../BLL/Sanpham.php");
$sp=new BLL_Sanpham();
$slide=$sp->getslide();

?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
    <img src="../image/Acer AS E5-475-31KC.png" style="height:290px; margin:auto; -webkit-transform:scale(1.2);">
    </div>
    <?php
      while($rsl=mysqli_fetch_array($slide)){
      ?>
      <div class="item">
        <img style="height:290px; -webkit-transform:scale(1.2); margin:auto" src="../image/<?php echo"$rsl[10]"?>.png" alt="Los Angeles">
      </div>
      <?php }?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
