<div class="shop-page-title category-page-title page-title ">

    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <div class="is-large">
                <nav class="woocommerce-breadcrumb breadcrumbs"><a href="/">Trang chủ</a> <span class="divider">&#47;</span> <a href="/index.php/category?id=0">Sản phẩm</a> <span class="divider">&#47;</span> MÁY LỌC NƯỚC KAROFI</nav>
            </div>
            <div class="category-filtering category-filter-row show-for-medium">
                <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
                    <i class="icon-menu"></i>
                    <strong>Lọc</strong>
                </a>
                <div class="inline-block">
                </div>
            </div>
        </div><!-- .flex-left -->

        <div class="flex-col medium-text-center">


            <p class="woocommerce-result-count hide-for-medium">
                Hiển thị <?= ($page - 1) * $limit + 1 ?>&ndash;<?= ($page) * $limit ?> trong <?= $total_product_category ?> kết quả</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <option value="asc">Thứ tự theo giá: thấp đến cao</option>
                    <option value="asc">Thứ tự theo giá: thấp đến cao</option>
                    <option value="desc">Thứ tự theo giá: cao xuống thấp</option>
                </select>
                <input type="hidden" name="page" value="1" />
                <input type="hidden" name="id" value="<?= $cur_category ?>" />
            </form>
        </div><!-- .flex-right -->

    </div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
    <div class="row category-page-row">

        <div class="col large-3 hide-for-medium ">
            <div id="shop-sidebar" class="sidebar-inner col-inner">
                <aside id="woocommerce_product_categories-13" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">CHUYÊN MỤC</span>
                    <div class="is-divider small"></div>
                    <!-- OLE -->
                    <!-- <ul class="product-categories">
                        <li class="cat-item cat-item-90  <?php if ('0' == $cur_category || 0 == $cur_category) : ?>current-cat cat-parent active<?php endif; ?>"><a href="/index.php/category?id=0">Tất cả</a>
                        </li>
                        <?php foreach ($categories as $i => $ct) : ?>
                            <li class="cat-item cat-item-90  <?php if ($ct->id == $cur_category) : ?>current-cat cat-parent active<?php endif; ?>"><a href="/index.php/category?id=<?= $ct->id ?>"><?= $ct->name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul> -->
                    <ul class="product-categories">
                            <li class="cat-item cat-item-90" aria-expanded="true"><a href="/index.php/category">Tất cả</a><button class="toggle"></button>
                                
                            </li>
                        <?php $cur_parent = 1 ?>
                        <?php foreach ($categoriesofparent as $k => $test) : ?>
                            <?php foreach ($test as $j => $sub_cate_test) : ?>
                                <?php if ($sub_cate_test->c_id == $cur_category) : ?>
                                    <?php $cur_parent  =  $k  ?>
                                    <?php break;?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        <?php foreach ($categoriesofparent as $i => $parent) : ?>
                            <?php if (count($parent) > 0) : ?>
                                <li class="cat-item cat-item-90 <?php if ($cur_parent == $i) : ?>cat-parent has-child active<?php endif; ?>" aria-expanded="true"><a href="#"><?= $parent[0]->name ?></a><button class="toggle"></button>
                                    <ul class="children">
                                        <?php foreach ($parent as $j => $sub_cate) : ?>
                                            <li class="cat-item cat-item-93 <?php if ($sub_cate->c_id == $cur_category) : ?>current-cat cat-parent active<?php endif; ?>"><a href="/index.php/category?id=<?= $sub_cate->c_id ?>"><?= $sub_cate->c_name ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </aside>
            </div><!-- .sidebar-inner -->
        </div><!-- #shop-sidebar -->

        <div class="col large-9">
            <div class="shop-container">

                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                    <?php foreach ($products as $i => $prod) : ?>
                        <div class="product-small col has-hover post-1352 product type-product status-publish has-post-thumbnail product_cat-karofi-thong-minh-may-loc-nuoc-de-gam first instock featured shipping-taxable purchasable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="/index.php/product?id=<?= $prod->id ?>">
                                                <img width="300" height="300" src="<?= $prod->path ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="<?= $prod->path ?>g 300w, <?= $prod->path ?> 280w,<?= $prod->path ?> 400w, <?= $prod->path ?> 600w, <?= $prod->path ?> 100w" sizes="(max-width: 300px) 100vw, 300px" /><img width="300" height="300" src="<?= $prod->path ?>" class="show-on-hover absolute fill hide-for-small back-image" alt="" srcset="<?= $prod->path ?> 300w, <?= $prod->path ?> 280w, <?= $prod->path ?> 400w,<?= $prod->path ?> 600w, <?= $prod->path ?> 100w" sizes="(max-width: 300px) 100vw, 300px" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                            <div class="wishlist-icon">
                                                <button class="wishlist-button button is-outline circle icon">
                                                    <i class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-1352">
                                                        <div class="yith-wcwl-add-button show" style="display:block">
                                                            <a href="index76d1.html?add_to_wishlist=1352" rel="nofollow" data-product-id="1352" data-product-type="simple" class="add_to_wishlist">
                                                                Add to Wishlist</a>
                                                            <img src="../../wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
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
                                    </div><!-- box-image -->
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                                <?= $prod->c_name ?> </p>
                                            <p class="name product-title"><a href="../../san-pham/may-loc-nuoc-karofi-kaq-u95/index.html"><?= $prod->name ?></a></p>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="price"><span class="woocommerce-Price-amount amount"><?= $prod->price ?>&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                        </div>
                                    </div><!-- box-text -->
                                </div><!-- box -->
                            </div><!-- .col-inner -->
                        </div><!-- col -->

                    <?php endforeach; ?>
                </div><!-- row -->
                <div class="container">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <?php for ($i = 1; $i <= $total; $i++) : ?>
                                <li><a class='page-number <?php if ($page == $i) : ?> current' <?php else : ?>' href="/index.php/category?id=<?= $cur_category ?>&page=<?= $i ?> <?php endif; ?>&orderby=<?= $orderby ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                            <?php if ($page < $total) : ?><li><a class="next page-number" href="/index.php/category?id=<?= $cur_category ?>&page=<?= $page + 1 ?>&orderby=<?= $orderby ?>"><i class="icon-angle-right"></i></a></li><?php endif; ?>
                        </ul>
                    </nav>
                </div>

            </div><!-- shop container -->
        </div>
    </div>

</main>