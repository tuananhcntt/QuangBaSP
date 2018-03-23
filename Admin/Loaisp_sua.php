 <div class="container-fluid" style="margin:auto">
            <div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Cập nhật loại sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Mã loại sản phẩm</label>
                            <input readonly="readonly" type="text" name="txtmaloai" value=<?php echo $_REQUEST['u']?> class="form-control cs">
                        </div>
                       <div class="form-group">
                            <label>Tên loại sản phẩm</label>
                            <input type="text" name="txttenloai" class="form-control cs"/>
                        </div>
                        <div class="examples">
                            <input type="submit" name="btnsua" value="Cập nhật" class="btn btn-sm btn-success sweet-10"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


