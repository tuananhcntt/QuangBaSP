<?php
    include_once("Control/masterpagetren.php");
?>

<div class="col-md-1"></div>

    <div class="container-fluid" style="margin:auto">
            <div class="col-sm-10">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Thêm QTV
                        </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="txtuser" class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Pasword</label>
                            <input type="pasword" name="txtpass" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" name="txtten" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="txtemail" class="form-control cs"/>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnthem" value="Thêm" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
require_once("../BLL/Quantrivien.php");
require_once("../Entities/Quantrivien.php");
    $quantrivien=new BLL_Quantrivien();
    $qtv=new Entities_Quantrivien();
    
    if(isset($_POST["btnthem"])){
        $qtv->username=$_POST["txtuser"];
        $qtv->password=md5($_POST["txtpass"]);
       $qtv->hoten=$_POST["txtten"];
       $qtv->email=$_POST["txtemail"];
        $quantrivien->themqtv($qtv);
        echo "$qtv->username,$qtv->password";
        
    }
?>

<?php
    include_once("Control/masterpageduoi.php");
?>