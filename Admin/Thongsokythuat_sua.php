<?php
    require_once("../BLL/Sanpham.php");
    $sanpham=new BLL_Sanpham();
    $rowsp=$sanpham->getsanpham();
?>
 <div class="container-fluid" style="margin:auto">
            <div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Cập nhật thông số kỹ thuật
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã thông số kỹ thuật</label>
                            <input readonly="readonly" type="text" name="txtmaloai" value=<?php echo $_REQUEST['u']?> class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Màn hình</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Camera</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>RAM</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Bộ nhớ trong</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Hệ điều hành</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Chipset</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>CPU</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Kích thước</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="form-group">
                            <label>Chọn sản phẩm</label>
                            <select name="sp" class="form-control cs">
                                <option value="">--Sản phẩm--</option>
                                    <?php
                                        foreach($rowsp as $rsp)
                                        echo "<option value=".$rsp['MaSP'].">".$rsp['TenSP']."</option>";
                                    ?>
                            </select>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnsua" value="Thêm/ cập nhật" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


