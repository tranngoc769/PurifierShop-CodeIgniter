
                    <div class="col-lg-9">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th width="20%" scope="col">Họ Và Tên</th>
                                    <th width="10%" scope="col">Số điện thoại</th>
                                    <th width="20%" scope="col">Email</th>
                                    <th width="20%" scope="col">Ngày thêm</th>
                                    <th width="10%" scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($email as $i => $em) : ?>
                                    <tr>
                                        <td><?= $em->name ?></td>
                                        <td><?= $em->phone ?></td>
                                        <td><?= $em->email ?></td>
                                        <td><?= $em->dateadd ?></td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="/index.php/admin/xoaemail/<?= $em->phone ?>" style="background-color: #c94b4b !important;  font-size :10px !important; padding: 0.7rem !important; color: white !important;" class="rounded-lg bg-current mb-2 p-3 text-center font-xssss mont-font text-uppercase ls-3 text-white d-block">Xóa</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php for ($i=0; $i < intval($total); $i++) : ?>
                                <a class="page-link <?php if (($i+1) == $current): ?>active<?php endif?>" href="/index.php/admin/email/<?= $i+1 ?>" tabindex="-1"><?= $i+1 ?></a>
                            <?php endfor; ?>
                            
                            <a style="margin-left: 10px;background: #ffe8e8;" id="exportEmail" class="page-link" href="#" tabindex="-1">Export</a>
                        </ul>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- footer wrapper -->
    <div class="footer-wrapper mt-0 bg-dark ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="row ">
                        <div class="col-md-12 col-lg-4 col-sm-9 col-xs-12 md-mb25 ">
                            <a href="/" class="logo "><img src="/style/images/logo-white.png " alt="logo "></a>
                            <p class="w-100 mt-lg-5 mt-4 ">Địa chỉ, <br>NY 10010 1-877-932-7111 <br> tieccuoi@mail.com</p>
                            <ul class="list-inline ">
                                <li class="list-inline-item mr-3 "><a href="# "><i class="ti-facebook "></i></a></li>
                                <li class="list-inline-item mr-3 "><a href="# "><i class="ti-twitter-alt "></i></a></li>
                                <li class="list-inline-item mr-3 "><a href="# "><i class="ti-linkedin "></i></a></li>
                                <li class="list-inline-item "><a href="# "><i class="ti-instagram "></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-3 col-xs-6 md-mb25 ">
                            <h5>Dịch vụ</h5>
                            <ul>
                                <li><a href="# ">Tiệc cưới</a></li>
                                <li><a href="# ">Đám hỏi</a></li>
                                <li><a href="# ">Đặt bàn</a></li>
                                <li><a href="# ">Trang điểm</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 ">
                            <h5>Kênh</h5>
                            <ul>
                                <li><a href="# ">Facebook</a></li>
                                <li><a href="# ">Instagram</a></li>
                                <li><a href="# ">Youtube</a></li>
                                <li><a href="# ">Zalo</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 ">
                            <h5>About</h5>
                            <ul>
                                <li><a href="# ">FAQ</a></li>
                                <li><a href="# ">Điều khoản</a></li>
                                <li><a href="# ">Pháp lý</a></li>
                                <li><a href="# ">Phản hooif</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 ">
                            <h5 class="mb-3 ">Văn phòng</h5>
                            <p style="width: 100%; ">Địa chỉ 1 <br>123-485-65-66</p>
                            <p style="width: 100%; ">Địa chỉ 2 <br>123-485-65-66</p>
                        </div>
                    </div>
                    <div class="middle-footer mt-5 pt-4 "></div>
                </div>
                <div class="col-sm-12 lower-footer pt-0 "></div>
                <div class="col-sm-6 col-xs-12 ">
                    <p class="copyright-text ">© 2021 copyright. All rights reserved.</p>
                </div>
                <div class="col-sm-6 col-xs-12 text-right ">
                    <p class="copyright-text float-right ">Design by <a href="# " class=" ">uitheme</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer wrapper -->

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js "></script>
    <script src="/style/js/plugin.js "></script>
    <script src="/style/js/scripts.js "></script>
    <script src="/style/js/main.js "></script>
    <script>
        $(".dashboard-tab ").height($('.dashboard-nav').height() - 18);
        $(".dashboard-tab ").niceScroll({
            cursorcolor: "#999 ", // change cursor color in hex
        });
    </script>

</body>


<!-- Mirrored from uitheme.net/zipto/saved.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 May 2021 05:04:53 GMT -->

</html>