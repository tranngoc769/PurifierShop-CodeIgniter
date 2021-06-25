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
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large row-divided ">
            <div class="large-9 col">
                <article id="post-1374" class="post-1374 post type-post status-publish format-standard has-post-thumbnail hentry category-thay-loi-loc-nuoc">
                    <div class="article-inner ">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-left">
                                <h6 class="entry-category is-xsmall">
                                    <a href="#" rel="category tag"><?= $blogs->date ?></a>
                                </h6>
                                <h1 class="entry-title"><?= $blogs->title ?></h1>
                                <div class="entry-divider is-divider small"></div>
                            </div><!-- .entry-header -->
                        </header><!-- post-header -->
                        <div class="entry-content single-page">
                            <?= $blogs->detail ?>
                        </div><!-- .entry-content2 -->
                    </div><!-- .article-inner -->
                </article><!-- #-1374 -->
                <div id="comments" class="comments-area">
                </div><!-- #comments -->
            </div> <!-- .large-9 -->

            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="flatsome_recent_posts-17" class="widget flatsome_recent_posts"> <span class="widget-title "><span>Bài mới</span></span>
                        <div class="is-divider small"></div>
                        <ul>
                        <?php foreach ($top_10_blog as $i => $top10) : ?>
                            <li class="recent-blog-posts-li">
                                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                    <div class="flex-col mr-half">
                                        <div class="badge post-date  badge-square">
                                            <img src="<?= $top10->avatar ?>">
                                            <!-- <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url(../wp-content/uploads/2019/12/5678-karofi-280x280.jpg); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;>
								<span class=" post-date-day"=""><?= $top10->day ?><br>
                                                <span class="post-date-month is-xsmall">TH<?= $top10->month ?></span>
                                            </div> -->
                                        </div>
                                    </div><!-- .flex-col -->
                                    <div class="flex-col flex-grow">
                                        <a href="/index.php/blog/detail?id=<?= $top10->id ?>" title="<?= $top10->title ?>"><?= $top10->title ?></a>
                                        <span class="post_comments oppercase op-7 block is-xsmall"><a href="/index.php/blog/detail?id=<?= $top10->id ?>"></a></span>
                                    </div>
                                </div><!-- .flex-row -->
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </aside>
                </div><!-- #secondary -->
            </div><!-- .post-sidebar -->

        </div><!-- .row -->

    </div>
</main><!-- #main -->