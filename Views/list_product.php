<section>

   <div class="bg_in">
      <div class="breadcrumbs">

         <ol itemscope itemtype="http://schema.org/BreadcrumbList">

            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

               <a itemprop="item" href="<?php echo BASE_URL ?>">

                  <span itemprop="name">Trang chủ</span></a>

               <meta itemprop="position" content="1" />

            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

               <a itemprop="item" href="<?php echo BASE_URL ?>">

                  <span itemprop="name"></span></a>

               <meta itemprop="position" content="2" />

            </li>
         </ol>

      </div>
      <div class="module_pro_all">
         <div class="box-title">
            <div class="title-bar">
               <h1>Tất cả sản phẩm</h1>
               
            </div>
         </div>
         <div class="pro_all_gird">
         <style type="text/css">
            .grids.grids-list-product {
                height: 375px;
            }
         </style>
            <div class="girds_all list_all_other_page ">
               <?php
               foreach ($list_product as $key => $product) {
               ?>
                  <div class="grids grids-list-product">
                  <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
                  <input type="hidden" value="<?php echo $product['IDSp'] ?>" name="IDSp">
                  <input type="hidden" value="<?php echo $product['TenSP'] ?>" name="TenSP">
                  <input type="hidden" value="<?php echo $product['HinhAnh'] ?>" name="HinhAnh">
                  <input type="hidden" value="<?php echo $product['Gia'] ?>" name="Gia">
                  <input type="hidden" value="1" name="SoLuong">
                     <div class="grids_in">
                        <div class="content">
                           <div class="img-right-pro">


                              <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['IDSp'] ?>">
                                 <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/quantri/images/<?php echo $product['HinhAnh'] ?>" data-original="image/1.jpg" alt="SHOES" />
                              </a>


                           </div>
                           <div class="name-pro-right">
                              <a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $product['IDSp']?>">
                                 <h3><?php echo $product['TenSP'] ?></h3>
                              </a>
                           </div>
                           <div>
                              <input type="submit" style="box-shadow: none" class="btn btn-success btn-sm" name="addcart" value="Thêm vào giỏ hàng">
                           </div>
                           <div class="price_old_new">
                              <div class="price">
                                 <span class="news_price"><?php echo number_format($product['Gia'], 0, ',', '.') . 'đ' ?></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php
               }
               ?>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
      </div>


</section>