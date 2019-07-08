<div class="col-lg-9 right-col">
<!-- Chi tiet san pham -->
	<div class="box-container">
    	<div class="box-home box-news">
			<div class="header">
                <div class="promote">
                    <a href="#"><span>Sản phẩm</span></a>
                </div>
            </div>
            <div class="product_detail">
                <div class="gioithieu">
                    <div class="img">
                        <a href="#" >
                            <img src="Public/frontend/img/pic1.jpg">
                        </a>
                    </div>
                    <div class="thongtin">
                        <p>Tên Sản phẩm:  <?php echo $arr->c_name; ?></p>
                        <p>Hãng sản phẩm: 
                            <?php 

                                $category = $this->model->get_a_record("select * from tbl_category_product where pk_category_product_id=".$arr->fk_category_product_id);
                                echo isset($category->c_name) ? $category->c_name : "";
                             ?>
                        </p>
                        <p>
                            Loại sản phẩm: 
                            <?php 
                                $type = $this->model->get_a_record("select * from tbl_product_type where pk_product_type_id=".$arr->fk_product_type_id);
                                echo isset($type->c_name) ? $type->c_name : "";
                             ?>

                        </p>
                        <p>Giá: <?php echo number_format($arr->c_price); ?></p>
                        <p>Giá sale: <?php echo number_format($arr->price_sale); ?></p>
                        <p> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>"><i class="icofont-cart"></i> Mua sản phẩm này</a></p>
                        <p>kích cỡ có:  <?php echo $arr->c_content; ?></p>
                    </div>
                </div>
                <div class="mota">
                    <p><a href="#" class="news-title"><?php echo $arr->c_name; ?></a></p>
                    <?php echo $arr->c_description; ?>
                </div>
            </div>
<style type="text/css">
    .product_detail{
        display: flex;
        flex-wrap: wrap;
    }
    .gioithieu{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .img{
        width: 20%;
    }
    .img img{
        width: 90%;
        height: auto;
    }
    .thongtin{
        width: 80%;
        display: flex;
        flex-direction: column;
    }
    .thongtin p{
        padding: 0px;
        height: 10px;
    }
</style>                 
        </div>
    </div>
</div>
    <!-- hết chi tiet san pham -->