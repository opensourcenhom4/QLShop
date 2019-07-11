<div class="box-container">
	<div class="box-home box-news">
		<div class="header">
            <div class="promote">
                <a href="#"><span>Thanh toán giỏ hàng</span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-10 content">  
                <form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
                    <!-- form group -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 text-right">Địa chỉ</div>
                            <div class="col-md-10">
                                <input type="text" name="diachi" value="<?php echo $arr->diachi; ?>" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- end form group -->
                    <!-- form group -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 text-right">Số ĐT: </div>
                            <div class="col-md-10">
                                <input type="text" name="dienthoai" value="<?php echo $arr->dienthoai; ?>" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- end form group -->
                    <!-- form group -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 text-right">Ghi chú</div>
                            <div class="col-md-10">
                                <textarea name="ghichu" row='10' placeholder=" Cỡ giày và màu cảu các sp bạn vừa mua"></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace("c_description");
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- end form group -->
                    <input type="submit" value="Process" class="btn btn-primary"> 
                    <input type="reset" value="Reset" class="btn btn-danger">
                </form>
		  </div>
        </div>
	</div>
</div>