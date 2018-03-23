<?php
require_once("Control/CSS.php");
require_once("Control/JS.php");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Guest</title>
    <?php
        include("Control/CSS.php");
        ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <form id="form1" method="POST">
  <div class="center" style="width:95%; margin-top:2em;margin-bottom:2em; border:solid 1px White; background-color: white">
    <div class="header_area">
      <div class="floatleft"><a href="#"><img src="images/techmart1.png"/></a></div>
        <?php
        include("Control/Menucon.php");
        ?>
    </div>
   
        <?php
        include("Control/Menu.php");
        ?>


      <div class="content_area">
        <?php
        include_once("Control/NoiDungTrang.php");
        ?>
          </div>
    <!--<div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
    </div>
    <div class="footer_bottom_area">
        <div class="footer_top_area">-->
            <?php
        // include("Control/MenuFooter.php");
        ?>
            <!--</div>-->
            <?php
        include("Control/BanQuyen.php");
        ?>
    </div>
  </div>
        <style>
            body {
                font-family: Arial;
                font-size: 12px;
                line-height: 13px;
                background: url(assets/css/images/maumoi.png) top fixed;
                
                font-family:Arial;
                
            }
            img{
                -webkit-transform:scale(1); /*Webkit: Scale up image to 1.2x original size*/
                -moz-transform:scale(1); /*Mozilla scale version*/
                -o-transform:scale(1);
                transition: -webkit-transform 0.5s;
                
            }
            img:hover{
                -webkit-transform:scale(1.1); /*Webkit: Scale up image to 1.2x original size*/
                -moz-transform:scale(1.1); /*Mozilla scale version*/
                -o-transform:scale(1.1); /*Opera scale version*/
                box-shadow:0px 0px 30px gray; /*hiệu ứng đổ bóng của ảnh ảnh khi dê chuột vào*/
                -webkit-box-shadow:0px 0px 30px gray; /*Safari shadow version*/
                -moz-box-shadow:0px 0px 30px gray; /*Mozilla shadow version*/
                opacity: 1;
                transition: -webkit-transform 2s;
            } 
            
        </style>
        <?php include_once("Control/JS.php") ?>
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});

</script>
    </form>
</body>
<footer></footer>
<link rel="stylesheet" type="text/css" href="assets/css/icon_bootstrap.1.css"/>
<div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left" title="Trở lên đầu trang">
    <span class="glyphicon glyphicon-arrow-up"></span>
</div>
<script>
$("#back-to-top").click(function(){return $("body, html").animate({scrollTop:0},400),!1});
$(function(){$('[data-toggle="tooltip"]').tooltip()});
</script>
</html>
