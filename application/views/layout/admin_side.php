

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="index" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">04</span>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                        <li class="menu-title" key="t-apps">Sản phẩm</li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-store"></i>
                                <span key="t-ecommerce">Quản lý sản phẩm</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="products" key="t-orders">Tất cả</a></li>
                                    <?php foreach ($categories as $i => $cat) : ?>
                                        <li><a href="products?id=<?=$cat->id?>" <?php if ($cat->id == $cur_category) : ?> class="active"<?php endif; ?>  key="t-orders"><?=$cat->name?></a></li>
                                    <?php endforeach; ?>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="add_product" class="waves-effect">
                                <i class="bx bxs-eraser"></i>
                                <span key="t-forms">Thêm sản phẩm</span>
                            </a>
                        </li>
                        <li class="menu-title" key="t-pages">Blog</li>
                        <li>
                            <a href="add_blog" class="waves-effect">
                                <i class="bx bxs-eraser"></i>
                                <span key="t-forms">Thêm bài viết</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-list-ul"></i>
                                <span key="t-tables">Quản lý bài viết</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>