
                <!-- san pham noi bat -->
                <div class="box-container">
                    <div class="box-home box-product">
                        <div class="header">
                            <div class="promote">
                                <a href="#"><span>Tìm được <?php echo isset($total) ? $total : 0; ?> sản phẩm</span></a>
                            </div>
                        </div>
                        <div class="list_product">
                                        <?php 
                                foreach ($arr as $rows) {
                             ?>
                            <div class="product">
                                <div class="image" style= "height: 233px;">
                                   <a href="#" >
                                        <img src="public/upload/product/<?php echo $rows->c_img; ?>" style= "width: 80%;height: 233px;">
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
            <!-- end right -->  
             <!-- paging -->
             <div>
                <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                    <?php 
                        for($i = 1; $i <= $num_page; $i++)
                        {
                     ?> 
                        <li class="page-item"><a class="page-link" href="index.php?controller=product&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php } ?>
                </ul> 
            </div>
            <!-- end paging -->