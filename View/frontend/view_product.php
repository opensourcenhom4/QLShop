
<div class="col-lg-9 right-col">
            <!-- ----------------- -->
                <!-- san pham noi bat -->
                <div class="box-container">
                    <div class="box-home box-product">
                        <div class="header">
                            <div class="promote">
                                <?php 
                                    $category = $this->model->get_a_record("select * from tbl_category_product where pk_category_product_id=$id");
                                 ?>
                                <a href="#"><span>Sản phẩm của hãng<?php echo isset($category->c_name) ? $category->c_name : ""; ?></span></a>
                            </div>
                        </div>
                        <div class="list_product">
                                        <?php 
                                foreach ($arr as $rows) {
                             ?>
                            <div class="product">
                                <div class="image">
                                    <a href="#" >
                                        <img src="Public/frontend/img/pic1.jpg">
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
            <!-- end right -->  
             <!-- paging -->
            <div class="pagination">
                <ul>
                    <li><a href="#" class="prevnext disablelink">Trang</a></li>
                    <?php 
                        for($i=1; $i <= $num_page; $i++){ 
                    ?>
                    <li><a href="index.php?controller=product&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
                </ul>
            </div>
            <!-- end paging -->
            
                </div>