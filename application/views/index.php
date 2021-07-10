         <style> 
      
      * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
      </style>
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
                        <a href="/index.php/category?id=<?php if($ct->id==1):?>1<?php elseif($ct->id==2):?>4<?php elseif($ct->id==3):?>7<?php elseif($ct->id==4):?>10<?php endif;?>">
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
                                 <a class="xemtruoc" data-prod="<?= $prod->p_id ?>">Xem trước</a> 
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

            <!-- MODAL -->
            <div id="modal_prod" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" tabindex="-1" style="overflow: hidden auto;display:none">
    <div class="mfp-container mfp-s-ready mfp-inline-holder" style="height: unset;">
        <div class="mfp-content">
            <div class="product-lightbox lightbox-content">
                <div class="product-quick-view-container">
                    <div class="row row-collapse mb-0 product" id="product-1515">
                        <div class="product-gallery large-6 col slideshow-container">
                           <div id="img_arr">
                              <div class="mySlides fade">
                                 <div class="numbertext">1 / 3</div>
                                 <img src="style\uploads\2019\12\5678-karofi-280x280.jpg" style="width:100%">
                              </div>
                              <div class="mySlides fade">
                                 <div class="numbertext">2 / 3</div>
                                 <img src="style\uploads\2019\12\5678-karofi-280x280.jpg" style="width:100%">
                              </div>
                              <div class="mySlides fade">
                                 <div class="numbertext">3 / 3</div>
                                 <img src="style\uploads\2019\12\5678-karofi-280x280.jpg" style="width:100%">
                              </div>
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <br>
                            <div id="img_arr_dot" style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                            </div>
                        </div>
                        <div class="product-info summary large-6  col entry-summary" style="font-size:90%;">
                            <div class="product-lightbox-inner" style="padding: 30px;">
                                <a id="gotoproduct" href="">
                                    <h1>Máy lọc nước nóng lạnh Karofi KAD-D52</h1>
                                </a>
                                <div class="is-divider small"></div>
                                <div id="price-wrapper_mod">
                                    <!-- <p class="price product-page-price price-on-sale">
                                       <del><span class="woocommerce-Price-amount amount">9,990,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del>
                                       <ins><span class="woocommerce-Price-amount amount">8,300,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                                    </p> -->
                                </div>
                                <div class="product-short-description">
                                    
                                </div>
                                <form action="" id="gotoproduct" class="cart" >
                                    <button type="submit" value="1515" class="single_add_to_cart_button button alt">Chi Tiết</button>
                                </form>
                                <div class="product_meta">
                                    <span class="posted_in">Danh mục: </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button title="Close (Esc)" type="button" onclick="closemodal()" class="mfp-close">×</button></div>
        </div>
        <div class="mfp-preloader">Loading...</div>
    </div>
</div>

<script type=' text/javascript ' src=' /style/wp-includes/js/jquery.min.js '></script>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function closemodal() {
   $("#modal_prod").css("display", "none")
}
function openmodal() {
   $("#modal_prod").css("display", "")
}
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
var formatter = new Intl.NumberFormat('vn-VN', { maximumSignificantDigits: 3 });
$(document).ready(function() {
   console.log("OK");
   $(".xemtruoc").on('click', function(e){
      let p_id = $(this).attr('data-prod')
      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "/index.php/product/api_product?id="+p_id,
        dataType: 'json',
        cache: false,
        timeout: 600000,
        success: function (data) {
            console.log("data : ",data);
            var img_arr = data.images;
            var descriptions = data.descriptions;
            var imgs_string = '';
            var description_string = '';
            var imgs_string_dot = '';
            for (let index = 0; index < img_arr.length; index++) {
               const element = img_arr[index];
               imgs_string += `<div class="mySlides fade">
                                 <div class="numbertext">1 \ 3</div>
                                 <img src="${element.path}" style="width:100%">
                              </div>`
               imgs_string_dot+= `<span class="dot" onclick="currentSlide(${index+1})"></span>`;
            }
            for (let index = 0; index < descriptions.length; index++) {
               const element = descriptions[index];
               description_string += '<li aria-level="1">'+ element[0] + " : "+ element[1] + '</li>';
            }
            $("#img_arr_dot").empty();
            $("#img_arr").empty();
            $("#img_arr")[0].innerHTML = imgs_string;
            $("#img_arr_dot")[0].innerHTML = imgs_string_dot;
            $(".posted_in")[0].innerHTML = "DANH MỤC: "+data.category;
            $(".product-short-description")[0].innerHTML = '<ul>'+description_string+'</ul>';
            // 
            let price_string = '';
            if (data.isSale == "1"){
               price_string+= `<ins><span class="woocommerce-Price-amount amount">${formatter.format(data.price*(1-(data.saleAmount/100)))}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>`;
            }
            if (data.isSale == "2"){
               price_string+= `<ins><span class="woocommerce-Price-amount amount">${formatter.format(data.price -(data.saleAmount/1))}<span class="woocommerce-Price-currencySymbol">₫</span></span></ins>`;
            }
            
            $("#price-wrapper_mod")[0].innerHTML = '<p class="price product-page-price price-on-sale">'+`<del><span class="woocommerce-Price-amount amount">${formatter.format(data.price)}<span class="woocommerce-Price-currencySymbol">₫</span></span></del>`+price_string+ '</p></div>';
            $("#img_arr")[0].innerHTML = imgs_string;
            $("#gotoproduct").attr("href","index.php/product?id="+data.id)
            $("#gotoproduct").attr("action","index.php/product?id="+data.id)
            openmodal();
            showSlides(1);

        },
        error: function (e) {
            console.log("ERROR : ", e);
        }
    });
   })
});
</script>
</main>