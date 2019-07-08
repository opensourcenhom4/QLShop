
<div class="col-lg-9 right-col">
            <!-- ----------------- -->
                <!-- san pham noi bat -->
                <div class="box-container">
                    <div class="box-home box-product">
                        <div class="header">
                            <div class="promote">
                                <?php 
                                    $category = $this->model->get_a_record("select * from tbl_product_type where pk_product_type_id=$id");
                                 ?>
                                <a href="#"><span> Sản phẩm của loại<?php echo isset($category->c_name) ? $category->c_name : ""; ?></span></a>
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
            <div>
                <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                    <?php 
                        for($i = 1; $i <= $num_page; $i++)
                        {
                     ?> 
                        <li class="page-item"><a class="page-link" href="admin.php?controller=category&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                </ul> 
            </div>
            <!-- end paging -->
             </div>