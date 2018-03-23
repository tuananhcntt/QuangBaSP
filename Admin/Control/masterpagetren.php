<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"></meta>
   <?php include("CSS.php"); ?>
   <script src="bootstrap/js/jquery-1.10.2.min.js"></script>
</head>

    <!--sidebar-mini: menu doc chi co icon-->
    <div>
<body class="hold-transition skin-green sidebar-mini">
   
<form method="POST" name="frm1" id="frm1" enctype="multipart/form-data">   
<div class="wrapper hvr-grow">
    <!--thanh ngang-->
    <?php include('MainHeader.php');?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!--<uc1:MenuDieuKhienDoc runat="server" ID="MenuDieuKhienDoc" />-->
        <?php include('MenuDieuKhienDoc.php'); ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
     <!--phan noi dung o day-->
	 <!--<asp:ContentPlaceHolder id="ContentPlaceHolder1" runat="server">-->
        
        <!--</asp:ContentPlaceHolder>-->
    
