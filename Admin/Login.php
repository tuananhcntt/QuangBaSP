<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body style="background-image:url('../image/log.jpg'); margin: auto;text-align:center">
    <form id="frmlogin" method="POST">
    <div>
    <div>
        <div class="cslog" style="text-align: center; color: white; margin-top:12%;width: 400px;height: 300px;">
            <div>

                <div style="padding:5%"><h4>ĐĂNG NHẬP ĐỂ QUẢN TRỊ WEBSITE</h4></div>
                
                    <div>
                        <div class="form-group"style="text-align: center; color: white; margin-top:15%">
                            <label>Username</label>
                            <input type="text" name="txtuser"class="csmo" style="padding-left:4px; margin-left:8px; color:black">
                        </div>
                        <div class="form-group"style="text-align: center; color: white">
                            <label>Password</label>
                            <input type="Password" name="txtpass" class="csmo" style="padding-left:4px; margin-left:8px; color:black">
                        </div>                        
                        <div class="form-group"style="text-align: center; color: white">
                            <input style="text-decoration: none; color: whitesmoke" type="submit" name="btnLogin" value="Đăng nhập" OnClick="btnLogin_Click" class="btn-link sub"/>
                        </div>
                    </div>
                
            </div>
        </div> 
           
    </div>
    </div>
    </form>
    <style>
        
    .cslog{
        margin: auto;
        box-shadow:0px 0px 10px lightblue; 
    }
    
    .csmo{
        opacity:1;
        
    }
    .csmo:hover{
        /*box-shadow:0px 0px 10px lightblue; */
        -webkit-transform:scale(1.02); 
        -moz-transform:scale(1); 
        -o-transform:scale(1);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }
    .sub:hover{
        box-shadow:0 0 5px lightblue;
    }
    </style>
</body>
</html>
<?php
require_once("../Entities/Quantrivien.php");
require_once("../BLL/Quantrivien.php");
$qtv=new Entities_Quantrivien();
$quantri=new BLL_Quantrivien();
    if(isset($_POST['btnLogin'])){
        $qtv->username=$_POST['txtuser'];
        $qtv->password=md5($_POST["txtpass"]);
        
        $sl=$quantri->login($qtv);
        $row=mysqli_fetch_array($sl);
        if($row['sl1']>0){
            header("Location: Home.php");
        }
        else{
            echo"<br>";
           echo'<div style="color:red;">Tài khoản đăng nhập không đúng</div>';
        }
    }
?>
