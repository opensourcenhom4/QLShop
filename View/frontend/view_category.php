 <!-- danh mục sản phẩm -->
	                <div class="box-container">
	                    <div class="product-category">
	                        <div class="header"><span>Hãng sản phẩm</span></div>
	                            <div id="product_category">
	                            <ul>
                                <?php 
                                    foreach ($arr as $rows) {
                                 ?>
                                <li>
                                	<a href="index.php?controller=product&id=<?php echo $rows->pk_category_product_id; ?>"><span><?php echo $rows->c_name; ?></span></a>
                                </li> 
                                <?php } ?>                                            
                            </ul>
	                        </div>
	                    </div>
					</div>
	            	<!-- hết danh mục sản phẩm -->