<footer id="footer" class="footer-wrapper">
   <div class="footer-widgets footer footer-2 ">
      <div class="row large-columns-3 mb-0">
         <div id="block_widget-2" class="col pb-0 widget block_widget">
            <span class="widget-title">KAROFI <?= $keywords['name'] ?></span>
            <div class="is-divider small"></div>
            <p>Địa chỉ: <?= $keywords['address'] ?></p>
            <p>Hotline: <a href="tel:<?= $keywords['hotline'] ?>"><?= $keywords['hotline'] ?></a></p>
            <p>Dịch vụ - Bảo hành: <a href="tel:CONFIG_SDT"><?= $keywords['customer_care'] ?></a></p>
            <div class="social-icons follow-icons "><a href="<?= $keywords['facebook'] ?>" target="_blank" data-label="Facebook" rel="nofollow" class="icon button circle is-outline facebook tooltip" title="Follow on Facebook"><i class="icon-facebook"></i></a>
               <a href="#" target="_blank" rel="nofollow" data-label="Instagram" class="icon button circle is-outline  instagram tooltip" title="Follow on Instagram"><i class="icon-instagram"></i></a><a href="#" target="_blank" data-label="Twitter" rel="nofollow" class="icon button circle is-outline  twitter tooltip" title="Follow on Twitter"><i class="icon-twitter"></i></a><a href="mailto:#" data-label="E-mail" rel="nofollow" class="icon button circle is-outline  email tooltip" title="Send us an email"><i class="icon-envelop"></i></a><a href="#" target="_blank" rel="nofollow" data-label="Pinterest" class="icon button circle is-outline  pinterest tooltip" title="Follow on Pinterest"><i class="icon-pinterest"></i></a>
            </div>
         </div>
         <div id="flatsome_recent_posts-18" class="col pb-0 widget flatsome_recent_posts">
            <span class="widget-title">Tin tức</span>
            <div class="is-divider small"></div>
            <ul>
               <?php foreach ($top_5_blog as $i => $top10) : ?>
                  <li class="recent-blog-posts-li">
                     <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                        <div class="flex-col mr-half">
                           <div class="badge post-date badge-small badge-square">
                              <div class="badge-inner bg-fill">
                                 <span class="post-date-day"><?= $top10->day ?></span><br>
                                 <span class="post-date-month is-xsmall">TH<?= $top10->month ?></span>
                              </div>
                           </div>
                        </div>
                        <div class="flex-col flex-grow">
                           <a href="/index.php/blog/detail?id=<?= $top10->id ?>" title="<?= $top10->title ?>"><?= $top10->title ?> </a>
                           <span class="post_comments oppercase op-7 block is-xsmall"><a href="/index.php/blog/detail?id=<?= $top10->id ?>"></a></span>
                        </div>
                     </div>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
         <div id="custom_html-2" class="widget_text col pb-0 widget widget_custom_html">
            <span class="widget-title">BẢN ĐỒ</span>
            <div class="is-divider small"></div>
            <div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.856557140066!2d106.2535385149382!3d21.3561524858219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31356959328343f3%3A0x84787e7b187dd175!2zNzAgTMOqIEzhu6NpLCBUVC4gVsO0aSwgTOG6oW5nIEdpYW5nLCBC4bqvYyBHaWFuZw!5e0!3m2!1svi!2s!4v1624521204394!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
         </div>
      </div>
   </div>
   <div class="absolute-footer light medium-text-center small-text-center">
      <div class="container clearfix">

         <div class="footer-primary pull-left">
            <!-- <div class="menu-secondary-container">
                        <ul id="menu-secondary-1" class="links footer-nav uppercase">
                           <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1383"><a href="van-chuyen/index.html">Vận chuyển &#038; Lắp đặt</a></li>
                           <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1384"><a href="tu-van/index.html">Tư vấn</a></li>
                           <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1385"><a href="dich-vu/index.html">Dịch vụ vượt trội</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1382"><a href="tuyen-dung/index.html">Tuyển Dụng</a></li>
                        </ul>
                     </div> -->
            <div class="copyright-footer">
               Copyright 2021 © <a title="TENMIEN.VN" href="#" rel="alternate">TENMIEN.VN</a>
               ALL RIGHTS RESERVED.
            </div>
         </div>
      </div>
   </div>
   <a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="icon-angle-up"></i></a>
</footer>
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
   <div class="sidebar-menu no-scrollbar ">
      <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
         <li class="header-search-form search-form html relative has-icon">
            <div class="header-search-form-wrapper">
               <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                  <form role="search" method="get" class="searchform" action="https://karofihaiduong.vn/">
                     <div class="flex-row relative">
                        <div class="flex-col flex-grow">
                           <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm&hellip;" />
                           <input type="hidden" name="post_type" value="product" />
                        </div>
                        <div class="flex-col">
                           <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                              <i class="icon-search"></i> </button>
                        </div>
                     </div>
                     <div class="live-search-results text-left z-top"></div>
                  </form>
               </div>
            </div>
         </li>
         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-95 current_page_item menu-item-244"><a href="index.html" class="nav-top-link">Trang chủ</a></li>
         <!-- <?php foreach ($categories as $i => $ct) : ?>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-229"><a href="/index.php/category?id=<?= $ct->id ?>" class="nav-top-link"><?= $ct->name ?></a></li>
         <?php endforeach; ?> -->
         <?php foreach ($categoriesofparent as $i => $parent) : ?>
            <?php if (count($parent) > 0) : ?>
               <li class="menu-custom-image menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-418 has-child" aria-expanded="true"><a href="#" class="nav-top-link"><?= $parent[0]->name ?></a>
                  <ul style="min-height:unset!; padding-bottom:10px" class="children">
                     <?php foreach ($parent as $j => $sub_cate) : ?>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-420"><a href="/index.php/category?id=<?=$sub_cate->c_id ?>"><?= $sub_cate->c_name ?></a>
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </li>
            <?php endif; ?>
         <?php endforeach; ?>
         <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1389"><a href="index.php/shop/suachua" class="nav-top-link">Sửa chữa máy lọc tại nhà</a></li>
         <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1389"><a href="index.php/shop/thayloi" class="nav-top-link">Thay lõi máy lọc tận nhà</a></li>
         <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1389"><a href="index.php/expert" class="nav-top-link">Chia sẻ kinh nghiệm</a></li>
         <li class="html custom html_topbar_right"><span style="font-size:140%;"><i class="icon-phone"></i> Hotline: <a href="tel:<?= $keywords['hotline'] ?>" style="
                  color: black;
                  "><?= $keywords['hotline'] ?></a></span></li>
      </ul>
   </div>
</div>
<div class='quick-call-button'></div>
<div class='call-now-button' id='draggable'>
   <div>
      <p class='call-text'> Hotline: <?= $keywords['hotline'] ?> </p>
      <a href='tel:<?= $keywords['hotline'] ?>' id='quickcallbutton' ' title=' Call Now ' >
               <div class=' quick-alo-ph-circle active '></div>
               <div class=' quick-alo-ph-circle-fill active '></div>
               <div class=' quick-alo-ph-img-circle notshake '></div>
            </a>
         </div>
      </div>
      <style> 
         @media screen and (max-width: 1600px) { 
         .call-now-button { display: flex !important; background: #1e73be; }  
         .quick-call-button { display: block !important; } 
         }
         @media screen and (min-width: px) { 
         .call-now-button .call-text { display: none !important; } 
         } 
         @media screen and (max-width: px) { 
         .call-now-button .call-text { display: none !important; } 
         } 
         .call-now-button { top: 85%; }
         .call-now-button { left: 3%; }
         .call-now-button { background: #1e73be; }
         .call-now-button div a .quick-alo-ph-img-circle, .call-now-button div a .quick-alo-phone-img-circle { background-color: #dd3333; }
         .call-now-button .call-text { color: #fff; }
      </style>
      <div class="zalo-container left" style="bottom:65px;">
         <a id="zalo-btn" href="https://zalo.me/<?= $keywords['hotline'] ?>" target="_blank" rel="noopener noreferrer nofollow">
            <div class="animated_zalo infinite zoomIn_zalo cmoz-alo-circle"></div>
            <div class="animated_zalo infinite pulse_zalo cmoz-alo-circle-fill"></div>
            <span><img src="/style/wp-content/plugins/contact-me-on-zalo/assets/images/zalo-2.png" alt="Contact Me on Zalo"></span>
         </a>
      </div>
      <link rel=' stylesheet ' id=' lv_css-css '  href=' /style/wp-content/plugins/quick-call-button/assets/css/quick-call-button1576.css?ver=1.2.1 ' type=' text/css ' media=' all ' />

      <script type=' text/javascript ' src=' /style/wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mina25a.js?ver=3.5.5 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mina25a.js?ver=3.5.5 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_c32198f57ab31ec727138169ce9031fc","fragment_name":"wc_fragments_c32198f57ab31ec727138169ce9031fc"};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.mina25a.js?ver=3.5.5 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min7359.js?ver=1.2.0 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"https:\/\/karofihaiduong.vn\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl7888.js?ver=2.2.8 '></script>
      <script type=' text/javascript ' src=' /style/wp-includes/js/hoverIntent.minc245.js?ver=1.8.1 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var flatsomeVars = {"ajaxurl":"https:\/\/karofihaiduong.vn\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"70"};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/themes/flatsome/assets/js/flatsome1aae.js?ver=3.5.3 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/themes/flatsome/inc/integrations/wc-yith-wishlist/wishliste735.js?ver=3.4 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search1aae.js?ver=3.5.3 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/themes/flatsome/assets/js/woocommerce1aae.js?ver=3.5.3 '></script>
      <script type=' text/javascript ' src=' /style/wp-includes/js/wp-embed.min9f89.js?ver=4.9.17 '></script>
      <script type=' text/javascript ' src=' /style/wp-includes/js/underscore.min4511.js?ver=1.8.3 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-includes/js/wp-util.min9f89.js?ver=4.9.17 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mina25a.js?ver=3.5.5 '></script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/quick-call-button/assets/js/drag-quick-call-button1576.js?ver=1.2.1 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var _zxcvbnSettings = {"src":"https:\/\/karofihaiduong.vn\/wp-includes\/js\/zxcvbn.min.js"};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-includes/js/zxcvbn-async.min5152.js?ver=1.0 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-admin/js/password-strength-meter.min9f89.js?ver=4.9.17 '></script>
      <script type=' text/javascript '>
         /* <![CDATA[ */
         var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
         /* ]]> */
      </script>
      <script type=' text/javascript ' src=' /style/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.mina25a.js?ver=3.5.5 '></script>
   </body>