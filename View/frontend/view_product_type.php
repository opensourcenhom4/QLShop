<!-- Sanr phaamr theo hangx -->
	            	<div class="box-container">
	                    <div class="product-category">
	                        <div class="header"><span>Loại sản phẩm</span></div>
	                            <div id="product_category">
	                            <ul>
                                <?php 
                                    foreach ($arr as $rows) {
                                 ?>
                                <li>
                                	<a href="index.php?controller=product&id=<?php echo $rows->pk_product_type_id; ?>"><span><?php echo $rows->c_name; ?></span></a>
                                </li> 
                                <?php } ?>                                            
                            </ul>
	                        </div>
	                    </div>
					</div>