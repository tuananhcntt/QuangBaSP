<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <?php require_once('CSS.php'); ?>
</head>
    <!--sidebar-mini: menu doc chi co icon-->
    
<div style="width: auto;height: auto">
   
<body class="hold-transition skin-blue-light sidebar-mini" style="background: url('<?php echo base_url('anh/nenden2.jpg')?>');background-repeat: no-repeat; background-attachment: fixed; z-index: 1000; width: 80%; margin: auto;">
  
   <img src="<?php echo base_url('anh/bia.jpg') ?>" width="100%"/>
<form method="POST" name="frm1" id="frm1">
  <?php include('mainheadguest.php');?>
<div class="wrapper hvr-grow">
    <!--thanh ngang-->
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!--<uc1:MenuDieuKhienDoc runat="server" ID="MenuDieuKhienDoc" />-->
        <?php include('menudocguest.php'); ?>
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
    
