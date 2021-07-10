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
            <div class="woocommerce-notices-wrapper">
                <div class="col">
                    <div class="row large-columns-1 medium-columns- small-columns-1">
                        <?php foreach ($blogs as $i => $bl) : ?>
                            <div class="media" style="margin: 10px 20px;display: flex;-ms-flex-align: start;align-items: flex-start;">
                            <a href="/index.php/blog/detail?id=<?= $bl->id ?>"><img src="<?= $bl->avatar ?>" width="100" height="100" alt="..." style="margin: 0px 20px;">
                                </a>
                                <div style="margin: auto 0;" class="media-body">
                                <a href="/index.php/blog/detail?id=<?= $bl->id ?>"><h5 class="mt-0"><?= $bl->title ?></h5></a>
                                    <?= $bl->date ?>
                                    <br><a href="/index.php/blog/detail?id=<?= $bl->id ?>">Chi tiết</a>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </div><!-- .col -->
                </div>
                <div class="col">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <?php for ($i = 1; $i <= $total; $i++) : ?>
                                <li><a class='page-number <?php if ($page == $i) : ?> current' <?php else : ?>' href="/index.php/blog?page=<?= $i ?> <?php endif; ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                            <?php if ($page < $total) : ?><li><a class="next page-number" href="/index.php/blog?page=<?= $page + 1 ?>"><i class="icon-angle-right"></i></a></li><?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    </div><!-- shop container -->
</main><!-- #main -->