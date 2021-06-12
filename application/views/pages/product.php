<div class="flex-col hide-for-medium flex-right flex-grow">
    <ul class="nav header-nav header-bottom-nav nav-right  nav-spacing-large nav-uppercase">
    </ul>
</div><!-- flex-col -->
</div><!-- .flex-row -->
</div><!-- .header-bottom -->

<div class="header-bg-container fill">
    <div class="header-bg-image fill"></div>
    <div class="header-bg-color fill"></div>
</div><!-- .header-bg-container -->
</div><!-- header-wrapper-->
</header>
<main id="main" class="">

    <div class="shop-container">

        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div><!-- /.container -->
        <div id="product-1352" class="post-1352 product type-product status-publish has-post-thumbnail product_cat-karofi-thong-minh-may-loc-nuoc-de-gam first instock featured shipping-taxable purchasable product-type-simple">
            <div class="product-container">

                <div class="product-main">
                    <div class="row content-row mb-0">

                        <div class="product-gallery col large-6">

                            <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">

                                <div class="badge-container is-larger absolute left top z-1">
                                </div>
                                <div class="image-tools absolute top show-on-hover right z-3">
                                    <div class="wishlist-icon">
                                        <button class="wishlist-button button is-outline circle icon">
                                            <i class="icon-heart"></i> </button>
                                        <div class="wishlist-popup dark">
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                                <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half" data-flickity-options='{
                                                    "cellAlign": "center",
                                                    "wrapAround": true,
                                                    "autoPlay": false,
                                                    "prevNextButtons":true,
                                                    "adaptiveHeight": true,
                                                    "imagesLoaded": true,
                                                    "lazyLoad": 1,
                                                    "dragThreshold" : 15,
                                                    "pageDots": false,
                                                    "rightToLeft": false       }'>
                                    <?php foreach ($product_images as $i => $prod_img) : ?>
                                        <div data-thumb="<?=$prod_img->path ?>" class="woocommerce-product-gallery__image slide <?php if ($i==0): ?>first<?php endif;?>"><a href="<?=$prod_img->path ?>"><img width="600" height="600" src="<?=$prod_img->path ?>" class="wp-post-image" alt="" title="mln-karofi-u95" data-caption="" data-src="<?=$prod_img->path ?>" data-large_image="<?=$prod_img->path ?>" data-large_image_width="600" data-large_image_height="600" srcset="<?=$prod_img->path ?> 600w, <?=$prod_img->path ?> 280w, <?=$prod_img->path ?> 400w, <?=$prod_img->path ?> 300w, <?=$prod_img->path ?> 100w" sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                    <?php endforeach; ?>
                                </figure>

                                <!-- <div class="image-tools absolute bottom left z-3">
                                    <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
                                        <i class="icon-expand"></i> </a>
                                </div> -->
                            </div>
                            <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4" data-flickity-options='{
                                    "cellAlign": "left",
                                    "wrapAround": false,
                                    "autoPlay": false,
                                    "prevNextButtons":true,
                                    "asNavFor": ".product-gallery-slider",
                                    "percentPosition": true,
                                    "imagesLoaded": true,
                                    "pageDots": false,
                                    "rightToLeft": false,
                                    "contain": true
                                    }'>
                                <?php foreach ($product_images as $i => $prod_img) : ?>
                                <div class="col <?php if ($i==0): ?>is-nav-selected first<?php endif;?>"><a><img src="<?=$prod_img->path ?>" width="300" height="300" class="attachment-woocommerce_thumbnail" /></a></div>
                                <?php endforeach; ?>
                            </div><!-- .product-thumbnails -->
                        </div>

                        <div class="product-info summary col-fit col entry-summary product-summary">
                            <h1 class="product-title entry-title">
                                <?=$product->name?></h1>
                            <div class="is-divider small"></div>
                            <ul class="next-prev-thumbs is-small show-for-medium"></ul>
                            <div class="price-wrapper">
                                <p class="price product-page-price ">
                                    <span class="woocommerce-Price-amount amount"><?=$product->price?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                </p>
                            </div>
                            <div class="product-short-description">
                                <table>
                                    <tbody>
                                        <tr style="height: 21px;">
                                            <td style="width: 118px; height: 21px;"><span style="color: #00aae7;"><strong>Thông số</strong></span></td>
                                            <td style="width: 280px; height: 21px;"><span style="color: #00aae7;"><strong>Chi tiết</strong></span></td>
                                        </tr>
                                        <?php foreach ($descriptions as $i => $des) : ?>
                                          <tr style="height: 21px;">
                                            <td style="width: 118px; height: 21px;"><strong><?=$des[0] ?></strong></td>
                                            <td style="width: 280px; height: 21px;"><?=$des[1] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product_meta">
                                <span class="posted_in">Danh mục: <a href="/index.php/category?id=<?= $product->c_id?>" rel="tag"><?= $product->c_name?></a></span>
                            </div>
                            <div class="social-icons share-icons share-row relative icon-style-outline "><a href="whatsapp://send?text=M%C3%81Y%20L%E1%BB%8CC%20N%C6%AF%E1%BB%9AC%20KAROFI%20KAQ-U95 - https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp"><i class="icon-phone"></i></a><a href="http://www.facebook.com/sharer.php?u=https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook"><i class="icon-facebook"></i></a><a href="http://twitter.com/share?url=https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter"><i class="icon-twitter"></i></a><a href="mailto:enteryour@addresshere.com?subject=M%C3%81Y%20L%E1%BB%8CC%20N%C6%AF%E1%BB%9AC%20KAROFI%20KAQ-U95&amp;body=Check%20this%20out:%20https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend"><i class="icon-envelop"></i></a><a href="http://pinterest.com/pin/create/button/?url=https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/&amp;media=https://karofihaiduong.vn/wp-content/uploads/2021/03/mln-karofi-u95.jpg&amp;description=M%C3%81Y%20L%E1%BB%8CC%20N%C6%AF%E1%BB%9AC%20KAROFI%20KAQ-U95" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest"><i class="icon-pinterest"></i></a><a href="http://plus.google.com/share?url=https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/" target="_blank" class="icon button circle is-outline tooltip google-plus" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" title="Share on Google+"><i class="icon-google-plus"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://karofihaiduong.vn/san-pham/may-loc-nuoc-karofi-kaq-u95/&amp;title=M%C3%81Y%20L%E1%BB%8CC%20N%C6%AF%E1%BB%9AC%20KAROFI%20KAQ-U95" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn"><i class="icon-linkedin"></i></a></div>
                        </div><!-- .summary -->
                        <div id="product-sidebar" class="col large-2 hide-for-medium product-sidebar-small">
                            <div class="hide-for-off-canvas" style="width:100%">
                                <ul class="next-prev-thumbs is-small nav-right text-right"></ul>
                            </div>
                        </div>

                    </div><!-- .row -->
                </div><!-- .product-main -->

                <div class="product-footer">
                    <div class="container">

                        <div class="woocommerce-tabs container tabbed-content">
                            <ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                                <li class="description_tab  active">
                                    <a href="#tab-description">Mô tả</a>
                                </li>
                                <li class="reviews_tab hidden">
                                    <a href="#tab-reviews">Đánh giá (0)</a>
                                </li>
                            </ul>
                            <div class="tab-panels">

                                <div class="panel entry-content active" id="tab-description">
                                <!--  START BY <div class="product-info__slide">-->
                                    <?= $product->detail?>
                                <!--  -->
                                </div>
                                <!-- REVIEW HIDEN -->
                                <div class="panel entry-content " id="tab-reviews">
                                    <div class="row" id="reviews">
                                        <div class="col large-12" id="comments">
                                            <h3 class="normal">Đánh giá</h3>
                                            <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>

                                        </div>
                                        <div id="review_form_wrapper" class="large-12 col">
                                            <div id="review_form" class="col-inner">
                                                <div class="review-form-inner has-border">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;MÁY LỌC NƯỚC KAROFI KAQ-U95&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Hủy</a></small></h3>
                                                        <form action="https://karofihaiduong.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                            <div class="comment-form-rating"><label for="rating">Đánh giá của bạn</label><select name="rating" id="rating" aria-required="true" required>
                                                                    <option value="">Xếp hạng&hellip;</option>
                                                                    <option value="5">Rất tốt</option>
                                                                    <option value="4">Tốt</option>
                                                                    <option value="3">Trung bình</option>
                                                                    <option value="2">Không tệ</option>
                                                                    <option value="1">Rất tệ</option>
                                                                </select></div>
                                                            <p class="comment-form-comment"><label for="comment">Nhận xét của bạn <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>
                                                            <p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
                                                            <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
                                                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi" /> <input type='hidden' name='comment_post_ID' value='1352' id='comment_post_ID' />
                                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                            </p>
                                                            <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="63f9ebd19a" /></p>
                                                            <p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="90" /></p>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- END REVIEW -->
                            </div><!-- .tab-panels -->
                        </div><!-- .tabbed-content -->

                    </div><!-- .container -->
                </div><!-- .product-footer -->
            </div><!-- .product-container -->
        </div>
    </div><!-- shop container -->
</main><!-- #main -->