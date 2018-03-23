
<ul class="sidebar-menu">
  <li class="header"><i class="glyphicon glyphicon-dashboard"></i>BẢNG ĐIỀU KHIỂN</li>
    <li class="treeview cs">
      <a href="Home.php">
        <i class="glyphicon glyphicon-home"></i> <span>Home</span>
      </a>
    </li>

    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-credit-card cs"></i>
          <span>Loại sản phẩm</span>
      </a>
      <ul class="treeview-menu">
        <li><a class="cs" href="Loaisp_ds.php">Danh sách</a></li>
        <li><a class="cs" href="Loaisp_them.php?u=''">Tạo mới</a></li>
      </ul>
    </li>
            
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-list"></i> <span>Nhóm sản phẩm</span>
      </a>
      <ul class="treeview-menu">
        <li><a class="cs" href="Nhomsp_ds.php">Danh sách</a></li>
        <li><a class="cs" href="Nhomsp_them.php?u=''">Tạo mới</a></li>
      </ul>
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-user"></i> <span>Nhà phân phối</span>
      </a>
      <ul class="treeview-menu">
        <li><a class="cs" href="NPP_ds.php">Danh sách</a></li>
        <li><a class="cs" href="NPP_them.php?u=''">Tạo mới</a></li>
      </ul>
    </li>
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-qrcode"></i> <span>Sản phẩm</span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a class="cs" href="Sanpham_ds.php"> Danh sách</a></li>
        <li><a class="cs" href="Sanpham_them.php?u=''"> Tạo mới</a></li>
      </ul>
    </li>
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-compressed"></i> <span>Thông số kỹ thuật</span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a class="cs" href="Thongsokythuat_ds.php"> Danh sách</a></li>
        <li><a class="cs" href="Thongsokythuat_them.php?u=''"> Tạo mới</a></li>
      </ul>
    </li>
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-picture"></i> <span>Album ảnh</span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a class="cs" href="Anh_ds.php">Danh sách</a></li>
        <li><a class="cs" href="Anh_them.php?u=''">Tạo mới</a></li>
      </ul>
    </li>
    <li class="treeview cs">
      <a href="#">
        <i class="glyphicon glyphicon-user"></i> <span>Quản trị viên</span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a class="cs" href="Quantrivien_ds.php">Danh sách</a></li>
        <li><a class="cs" href="Quantrivien_them.php?u=''">Tạo mới</a></li>
      </ul>
    </li>
     <li class="treeview cs">
          <a href="#">
            <i class="glyphicon glyphicon-th"></i>
            <span>Tùy Chọn Giao Diện</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
         <ul class="treeview-menu">
             <!--<uc1:Skin runat="server" ID="Skin" />-->
             <?php
              include('Skin.php'); 
             ?>
         </ul>
         
        </li>
      </ul>
