<?php
foreach($chitietsanpham as $key => $value){
   $TenSp = $value['TenSP'];
   $TenLoai = $value['TenLoai'];
   $id_cate = $value['IDLoai'];
}
?>
<section>
<?php
   foreach($chitietsanpham as $key => $chitiet){
?>
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
                 
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $id_cate ?>">
                           <span itemprop="name"><?php echo $TenLoai ?></span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?php echo $TenSp ?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                  </div>
                  <div class="content_page">
                     <div class="content-right-items margin0">
                        <div class="title-pro-des-ct">
                           <h1><?php echo $TenSp ?></h1>
                        </div>
                        <div class="slider-galery ">
                         <!-- <div id="sync1" class="owl-carousel owl-theme"> -->
                                  <div class="item">
                                      <img src="<?php echo BASE_URL?>/quantri/images/<?php echo $chitiet['HinhAnh']?>" width="100%">
                                  </div>
                      
                                  </div>

                                  <div id="sync2" class="owl-carousel owl-theme">
                                     <div class="item">
                                     <img src="<?php echo BASE_URL?>/quantri/images/<?php echo $chitiet['HinhAnh']?>" width="100%">
                                  </div>
                   
                                  </div> 
                           
                        </div>
                        <div class="content-des-pro">
                           <div class="content-des-pro_in">
                              <div class="pro-des-sum">
                                 <div class="price">
                                    <!-- <p class="code_skin" style="margin-bottom:10px">
                                       <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                    </p> -->
                                    <!-- <div class="status_pro">
                                       <span><b>Trạng thái:</b>  Còn hàng</span>
                                    </div> -->
                                   
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price bg_green">Giá bán</span> <?php echo number_format($chitiet['Gia'],0,',','.')  ?><span>vnđ</span>
                                    <div class="clear"></div>
                                 </div>
                                 
                              </div>
                              <div class="clear"></div>
                           </div>
                           <div class="content-pro-des">
                              <div class="content_des">
                                 <?php echo $chitiet['KhuyenMai'] ?>

                              </div>
                           </div>
                           <div class="ct">
                              <div class="number_price">
                                 <div class="custom pull-left">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                    <div class="clear"></div>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <div class="wp_a">
                                 <a onclick="return giohang(579);" class="view_duan">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                 </a>
                                 <a href="tel:090 66 99 038" class="view_duan">
                                 <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                 </a>
                                 <div class="clear"></div>
                              </div>
                              <div class="clear"></div>
                           </div>
                     
                           <div class="tags_products prodcut_detail">
                              <div class="tab_link">
                                 <h3 class="title_tab_link">TAGS: </h3>
                                 <div class="content_tab_link"> <a href="tag/"></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="content-des-pro-suport">
                           <div class="box-setup">
                              <div class="title-setup">
                                 <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                              </div>
                              <div class="info-setup">
                                 <div class="row-setup">
                                    <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                                    <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="info-prod prod-price freeship">
                              <span class="title">
                                 <p>
                                 </p>
                              </span>
                              <span class="row more"><a href="" title="">Xem thêm</a>
                              </span>
                           </div>
                           <div class="bx-contact">
                              <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                              <p>Chat với chúng tôi :</p>
                              <p><img alt="icon skype " src="<?php echo BASE_URL?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">THH.com</a></p>
                              <p><img alt="icon skype " src="<?php echo BASE_URL?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">THH.com</a></p>
                              <p><img alt="icon skype " src="<?php echo BASE_URL?>/public/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">THH.com</a></p>
                           
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
               <div class="wrapper_all_main_right">
                  <div class="tabs-animation">
                     <div class="bg_in">
                        <div id="nav-anchor"></div>
                        <nav class="nav-tabs">
                           <ul>
                              <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                              <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                              <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                           </ul>
                           <div class="name-product">
                              Iphone X
                              <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                           </div>
                           <div class="ct btn-wp">
                              <div class="wp_a">
                                 <a onclick="return giohang(371);" class="view_duan">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                 </a>
                                 <a href="tel:090 66 99 038" class="view_duan">
                                 <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                 </a>
                                 <div class="clear"></div>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="product_detail_info">
                     <div class="module_pro_all" id="productDetail">
                        <div class="box-title">
                           <div class="title-bar">
                              <h3>Chi tiết sản phẩm</h3>
                           </div>
                        </div>
                        <div class="tab_content content_text_product content-module">
                          <p><?php echo $chitiet['MoTa'] ?></p>
                        </div>
                     </div>
                   
                  </div>
          
                  <div class="clear"></div>
                  
                  <script type="text/javascript">
                     CloudZoom.quickStart();
                     
                     jQuery(function($) {
                     
                         var $userName = $('.name');
                     
                         if ($userName.length) {
                     
                             $userName.avatarMe({
                     
                                 className: 'avatar-me',
                     
                                 maxChar: 1
                     
                             });
                     
                         }
                     
                     });
                     
                  </script>
                  <div class="clear"></div>
                  
                  <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->

                  <?php
         }
         ?>
                  <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Sản phẩm liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                        <?php
                        foreach($sanphamlienquan as $key => $splq){

                        
                        ?>
                        
                        <div class="grids">
                       <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['IDSp'] ?>">
                           <img class="lazy img-pro content-image" src="<?php echo BASE_URL?>/quantri/images/<?php echo $splq['HinhAnh']?>" data-original="image/Air_Jordan_1_Mid.jpg" alt="Shoes" />
                           </a>
                           </div>
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $splq['IDSp'] ?>">
                              <h3><?php echo $splq['TenSP']?></h3>
                           </a>
                        </div>
   
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price"><?php echo number_format($splq['Gia'],0,',','.').'đ'  ?></span>
                           </div>
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
               </div>
              
               <!--end:left-->
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
       
         <script>
            jQuery(document).ready(function() {
            
            
            
                var div_fixed = jQuery('.product_detail_info').offset().top;
            
                jQuery(window).scroll(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    } else {
            
                        jQuery('.tabs-animation').removeClass('fix_top');
            
                    }
            
                });
            
                jQuery(window).load(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    }
            
                });
            
            });
            
         </script>
      </section>