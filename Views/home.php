
    <section>
    <div class="bg_in">
            <style type="text/css">
                .grids.home_product {
                        height: 372px;
                    }
        </style>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm </h1>
                        <a class="read_more" href="#">
                  Xem thêm
                  </a>
                    </div>
                </div>
                
            <div class="module_pro_all">
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                    <?php
                    foreach($sanpham_index as $key => $product){
                        if($product['SanPhamHot']==1){
                    ?>
                    <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">

                    <input type="hidden" value="<?php echo $product['IDSp'] ?>" name="IDSp">
                    <input type="hidden" value="<?php echo $product['TenSP'] ?>" name="TenSP">
                    <input type="hidden" value="<?php echo $product['HinhAnh'] ?>" name="HinhAnh">
                    <input type="hidden" value="<?php echo $product['Gia'] ?>" name="Gia">
                    <input type="hidden" value="1" name="SoLuong">

                    <div class="grids home_product">
                        <div class="grids_in">
                            <div class="content">
                                <div class="img-right-pro">

                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['IDSp'] ?>">
                                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL?>/quantri/images/<?php echo $product['HinhAnh']?>" 
                                        data-original="image/1.jpg" alt="<?php echo $product['TenSP'] ?>" />
                                    </a>

                                   
                                </div>
                                <div class="name-pro-right">
                                    <a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $product['IDSp']?>">
                                        <h3><?php echo $product['TenSP'] ?></h3>
                                    </a>
                                </div>
                                <div >
                                     <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Thêm vào giỏ hàng">   
                                </div>
                                <!-- <div>
                                
                                    <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Đặt Hàng">
                                </div> -->
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price"><?php echo number_format($product['Gia'],0,',','.').'đ'?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php
                        }
                    }
                    ?>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
         
                <!-- <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <div class="grids">
                            <div class="grids_in">
                                <div class="img-right-pro">
                                    <a href="sanpham.php">
                                        <img class="lazy img-pro" src="<?php echo BASE_URL?>/public/image/9.jpg" data-original="image/9.jpg" alt="Máy in Canon MF229DW" />
                                    </a>
                                </div>
                                <div class="name-pro-right">
                                    <a href="<?php echo BASE_URL ?>/index/chitietsanpham/18">
                                        <h3>Nike Ari Zoom Tempo Next%</h3>
                                    </a>
                                </div>
                                <div class="add_card">
                                    <a onclick="return giohang(579);">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                    </a>
                                </div>
                                <div class="price_old_new">
                                    <div class="price">
                                        <span class="news_price">5.860.000đ </span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div> -->

    </section>
    <!--end:body-->
    <div class="clear"></div>
   