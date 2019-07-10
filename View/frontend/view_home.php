
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
                            	<div class="image" style= "height: 233px;">
                                	<img src="public/upload/product/<?php echo $rows->c_img; ?>" style= "width: 80%; height: 100%;">
                                </div>
                                <div class="info">
                                        <p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></p>
                                        <p>
                                            <?php if ($rows->price_sale >1) {?>
                                             <strong class="price"><del><?php echo number_format($rows->c_price); ?> VNĐ</del></br>
                                                <?php echo number_format($rows->price_sale); ?> VNĐ
                                             </strong> 
                                            <?php } else{?> 
                                                <strong class="price"><?php echo number_format($rows->c_price); ?> VNĐ</strong> 
                                            <?php } ?>
                                        </p>
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
                            	<div class="image"style= "height: 233px;">
                                	<a href="#" >
                                		<img src="public/upload/product/<?php echo $rows->c_img; ?>" style= "width: 80%; height: 100%;">
                                    </a>
                                </div>
                                <div class="info">
                                    <p><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></p>
                                    <p>
                                            <?php if ($rows->price_sale >1) {?>
                                             <strong class="price"><del><?php echo number_format($rows->c_price); ?> VNĐ</del></br>
                                                <?php echo number_format($rows->price_sale); ?> VNĐ
                                             </strong> 
                                            <?php } else{?> 
                                                <strong class="price"><?php echo number_format($rows->c_price); ?> VNĐ</strong> 
                                            <?php } ?>
                                        </p>
                                </div>
                            </div>
                                <!-- end product -->
                                 <?php } ?> 
                            </div>
                        </div>
                    </div>
                <!-- end san pham mới nhất-->
                