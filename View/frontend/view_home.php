<div class="col-lg-9 right-col">
            <!-- ----------------- -->
            	<!-- san pham noi bat -->
            	<div class="box-container">
                	<div class="box-home box-product">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm nổi bật</span></a>
                            </div>
                        </div>
                        <div class="list_product">
                            <?php 
                                //lay cac ban ghi co c_hotproduct=1
                                $spnoibat = $this->model->get_all("select * from tbl_product where c_hotproduct = 1 order by pk_product_id desc limit 0,6");
                                foreach($spnoibat as $rows)
                                {
                             ?>
                        	<div class="product">
                            	<div class="image">
                                	<a href="#" >
                                		<img src="public/upload/product/<?php echo $rows->c_img; ?>">
                                    </a>
                                </div>
                                <div class="info">
                                        <p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></p>
                                        <p><strong>Giá:</strong> <strong class="price"><?php echo number_format($rows->c_price); ?> VNĐ</strong> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>"><i class="icofont-cart"></i> Cart</a></p>
                                    </div>
                            </div>
                             <!-- end product -->
                               <?php } ?> 
                            </div>
                        </div>
                    </div>
                <!-- end san pham mới nhất-->
                <!-- san pham noi bat -->
            	<div class="box-container">
                	<div class="box-home box-product">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm mới nhất</span></a>
                            </div>
                        </div>
                        <div class="list_product">
                             <?php 
                                $lates_product = $this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,6");
                                foreach($lates_product as $rows)
                                {
                             ?>
                        	<div class="product">
                            	<div class="image">
                                	<a href="#" >
                                		<img src="public/upload/product/<?php echo $rows->c_img; ?>">
                                    </a>
                                </div>
                                <div class="info">
                                    <p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></p>
                                    <p><strong>Giá:</strong> <strong class="price"><?php echo number_format($rows->c_price); ?> VNĐ</strong> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>"><i class="icofont-cart"></i>Cart</a></p>
                                </div>
                            </div>
                            
                                <!-- end product -->
                                 <?php } ?> 
                            </div>
                        </div>
                    </div>
                <!-- end san pham mới nhất-->
                
            <!-- end right -->	
            	</div>