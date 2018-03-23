<?php
require_once("Control/CSS.php");
require_once("Control/JS.php");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Guest</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../Admin/bootstrap/css/bootstrap.min.css"/>
</head>
<!--<style>
            body {
                font-family: Arial;
                font-size: 12px;
                line-height: 13px;
                /*background: url(assets/css/images/maumoi.png) top fixed;*/
                background-color: whitesmoke;
                font-family:Arial;
                margin:auto;
            }
</style>-->
<body style="background: whitesmoke">
<form id="form1" method="POST">
  <div class="center" style="width:100%;margin-bottom:2em; background-color: whitesmoke">
    <div style="background-image: url(images/bia4.jpg); margin-bottom:0px">
            
        <div style="float: left"><a href="Home.php"><img src="images/techmart1.png"/></a>
         <?php
            include("Control/Menudon.php");
            ?>
            
        </div>
            <div style="float: right">
        <input type="search" name="txttk" class="cs"/>
        <input type="submit" name="btntk" id="btntk" class="btn-xsm btn-warning" value="Tìm kiếm"/>
    </div>
   </div>
        

        <div class="content_area">