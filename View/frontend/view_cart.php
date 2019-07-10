

<!-- ----------------- -->
    <!-- san pham noi bat -->
    <div class="box-container">
        <div class="box-home box-product">
            <div class="header">
                <div class="promote">
                    <a href="#"><span>Giỏ hàng</span></a>
                </div>
            </div>
             <div class="content">  
                <table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="width: 100px;">Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th style="width: 100px">Số lượng</th>
                        <th style="width: 70px"></th>
                    </tr>
                    <?php 
                        foreach($_SESSION["cart"] as $product){
                     ?>
                    <tr>
                        <td style="text-align: center;"><img src="public/upload/product/<?php echo $product["c_img"]; ?>" style="width: 100px;"></td>
                        <td><?php echo $product["c_name"]; ?></td>
                        <td style="text-align: center;"><?php echo number_format($product["c_price"]); ?> VNĐ</td>
                        <td style="text-align: center;"><input type="number" min="0" name="soluong<?php echo $product["pk_product_id"]; ?>" value="<?php echo $product["number"]; ?>" style="width: 70px;"></td>
                        <td style="text-align: center;"><a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"]; ?>">Xóa</a></td>
                    </tr>
                <?php } ?>
                </table>   
                <ul style="margin-top: 10px; font-weight: bold;">
                    <li>Số lượng sản phẩm đã mua: &nbsp; &nbsp; &nbsp; <?php echo $this->cart_number(); ?></li>
                    <li>Giá trị đơn hàng: &nbsp; &nbsp; &nbsp; <?php echo number_format($this->cart_total()); ?> VNĐ</li>
                </ul>
                <p style="margin-top: 10px;">
                    <input type="button" value="Tiếp tục mua hàng" onclick="location.href='index.php';">
                    <input type="button" value="Xóa giỏ hàng" onclick="location.href='index.php?controller=cart&act=destroy';" name="">
                    <input type="submit" value="Cập nhật giỏ hàng" name="">
                    <?php if($this->cart_number()>0){ ?>
                        <input type="button" value="Thanh toán đơn hàng" onclick="location.href='index.php?controller=checkout';" name="">
                    <?php } ?>
                </p>      
            </div>
        </div>
    </div>
<!-- end paging -->
