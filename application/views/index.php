         <main id="main" class="">
            <div id="content" role="main" class="content-area">
               <div class="slider-wrapper relative " id="slider-685022574">
                  <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
                     "cellAlign": "center",
                     "imagesLoaded": true,
                     "lazyLoad": 1,
                     "freeScroll": false,
                     "wrapAround": true,
                     "autoPlay": 4000,
                     "pauseAutoPlayOnHover" : true,
                     "prevNextButtons": true,
                     "contain" : true,
                     "adaptiveHeight" : true,
                     "dragThreshold" : 5,
                     "percentPosition": true,
                     "pageDots": true,
                     "rightToLeft": false,
                     "draggable": true,
                     "selectedAttraction": 0.1,
                     "parallax" : 0,
                     "friction": 0.6        }'>
                     
                     <?php foreach ($default_images as $i => $di) : ?>
                        <?php if ( $di->name =="banner") : ?>
                        <div class="banner has-hover has-slide-effect slide-zoom-out-fast" id="banner-<?= $di->id?>">
                           <div class="banner-inner fill">
                              <div class="banner-bg fill">
                                 <div class="bg fill bg-fill "></div>
                                 <div class="overlay"></div>
                              </div>
                              <div class="banner-layers container">
                                 <div class="fill banner-link"></div>
                              </div>
                           </div>
                           <style scope="scope">
                              #banner-<?= $di->id?> {
                              padding-top: 200px;
                              }
                              #banner-<?= $di->id?> .bg.bg-loaded {
                              background-image: url(<?= $di->path?>);
                              }
                              #banner-<?= $di->id?> .overlay {
                              background-color: rgba(0, 0, 0, 0.05);
                              }
                              @media (min-width:550px) {
                              #banner-<?= $di->id?> {
                              padding-top: 400px;
                              }
                              }
                           </style>
                        </div>
                        <?php endif; ?>
                     <?php endforeach; ?>
                  </div>
                  <div class="loading-spin dark large centered"></div>
                  <style scope="scope">
                  </style>
               </div>
               <div class="row large-columns-4 medium-columns- small-columns-2 row-xsmall slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}'>
                  <?php foreach ($categories as $i => $ct) : ?>
                  <div class="product-category col">
                     <div class="col-inner">
                        <a href="/index.php/category?id=<?=$ct->id?>">
                           <div class="box box-category has-hover box-bounce ">
                              <div class="box-image">
                                 <div class="">
                                    <img src="<?= $default_images_arr['loai'.$ct->id] ?>" alt="CÂY NƯỚC NÓNG LẠNH" widh="300" height=t"300" /> 
                                 </div>
                              </div>
                              <div class="box-text text-center">
                                 <div class="box-text-inner">
                                    <h5 class="uppercase header-title">
                                       <?= $ct->name ?>
                                    </h5>
                                    <p class="is-xsmall uppercase count ">
                                       <?= $ct->amount ?> Sản phẩm 
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
               <h2 style="text-align: center">KAROFI <?= strtoupper($keywords['nameUp']) ?> </h2>
               <p style="text-align: center"><?= $keywords['title'] ?></p>
               <div class="container section-title-container">
                  <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">SẢN PHẨM NỔI BẬT</span><b></b></h3>
               </div>
               <!-- PRODUCT AREA -->
               <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
                  <!-- EACH -->
                  
                  <?php foreach ($top_products as $i => $prod) : ?>
                  <div class="product-small col has-hover post-1352 product type-product status-publish has-post-thumbnail product_cat-karofi-thong-minh-may-loc-nuoc-de-gam first instock featured shipping-taxable purchasable product-type-simple">
                     <div class="col-inner">
                        <div class="badge-container absolute left top z-1">
                        </div>
                        <div class="product-small box ">
                           <div class="box-image">
                              <div class="image-fade_in_back">
                              <a href="index.php/product?id=<?= $prod->p_id ?>">
                                 <img style="width: 300px!important;height: 300px !important;" width="300" height="300" src="<?=$prod->path?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="<?=$prod->path?> 300w, <?=$prod->path?> 280w, <?=$prod->path?> 400w, <?=$prod->path?> 600w, <?=$prod->path?> 100w"
                                    sizes="(max-width: 300px) 100vw, 300px" /><img style="width: 300px!important;height: 300px !important;" width="300" height="300" src="<?=$prod->path?>" class="show-on-hover absolute fill hide-for-small back-image"
                                    alt="" srcset="<?=$prod->path?> 300w"
                                    sizes="(max-width: 300px) 100vw, 300px" /> </a>
                              </div>
                              <div class="image-tools is-small top right show-on-hover">
                                 <div class="wishlist-icon">
                                    <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart" ></i>			</button>
                                    <div class="wishlist-popup dark">
                                       <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1352">
                                          <div class="yith-wcwl-add-button show" style="display:block">
                                          <a href="index.php/product?id=<?= $prod->p_id ?>" rel="nofollow" data-product-id="1352" data-product-type="simple" class="add_to_wishlist">
                                             Xem</a>
                                             <img src="/style/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                          </div>
                                          <div style="clear:both"></div>
                                          <div class="yith-wcwl-wishlistaddresponse"></div>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                              </div>
                              <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                 <a class="quick-view" data-prod="1352" href="#quick-view">Chi Tiết</a> 
                              </div>
                           </div>
                           <div class="box-text box-text-products">
                              <div class="title-wrapper">
                                 <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                 <?=$prod->category?>
                                 </p>
                                 <p class="name product-title"><a href="san-pham/may-loc-nuoc-karofi-kaq-u95/index.html">
                                 <?=$prod->name?></a></p>
                              </div>
                              <div class="price-wrapper">
                                 
                             
                                 <span class="price"><span class=" <?php if($prod->isSale != 0 ) : ?>giamgia<?php endif ?> woocommerce-Price-amount amount"><?=number_format($prod->price,0,',','.');?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                 </span>
                              </div>
                              <?php if ($prod->isSale != 0): ?>
                                 <div class="price">
                                    <span class="price"><span class="woocommerce-Price-amount amount">
                                    <?php if($prod->isSale == 1 ) : ?>
                                       <?=number_format($prod->price * (1-$prod->saleAmount/100),0,',','.');?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                       <?php else: ?>
                                          <?=number_format($prod->price  - $prod->saleAmount,0,',','.');?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                          <?php endif; ?>
                                    
                                 </span>
                              </div>
                              <?php endif;?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach ?>
               </div>
               <!-- END PRODUCT AREA -->
               <div class="gap-element" style="display:block; height:auto; padding-top:40px" class="clearfix"></div>
            </div>
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">KHUYẾN MÃI</span><b></b></h3>
            </div>
            <div class="row row-large row-divided ">
               
            <?php foreach ($sale_prod as $i => $top10) : ?>
               <div class="large-6 col">
                  <div class="row large-columns-1 medium-columns- small-columns-1">
                     <div class="col post-item">
                        <div class="col-inner">
                        <a href="/index.php/blog/detail?id=<?= $top10->id ?>" class="plain">
                           <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                              <div class="box-image" style="width:40%;">
                                 <div class="image-cover" style="padding-top:56%;">
                                    <img width="400" height="400" src="<?= $top10->avatar ?>" sizes="max-width: 400px) 100vw, 400px">
                                 </div>
                              </div>
                              <div class="box-text text-left">
                                 <div class="box-text-inner blog-post-inner">
                                    <h5 class="post-title is-large "><?= $top10->title ?></h5>
                                    <div class="is-divider"></div>
                                    <!-- <p class="from_the_blog_excerpt ">Máy lọc nước là sản phẩm không thể thiếu trong mối gia đình để bảo [...]</p> -->
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach;?>
            </div>
         </main>