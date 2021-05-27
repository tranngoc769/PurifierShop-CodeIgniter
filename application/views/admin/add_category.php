                    <div class="col-lg-9">
                        <div class="dashboard-tab cart-wrapper p-5 bg-white rounded-lg shadow-xs" tabindex="0" style="height: 697px; overflow: hidden; outline: none;">
                            <form method="POST" action="<?=$link?>">
                                <div class="row" hidden>
                                    <div class="col-lg-12 mb-12">
                                        <div class="form-gorup">
                                            <label class="mont-font fw-600 font-xsss" for="comment-name">Mã</label>
                                            <input type="text" value="<?=$category->id ?>" name="id" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-12">
                                        <div class="form-gorup">
                                            <label class="mont-font fw-600 font-xsss" for="comment-name">Tên loại dịch vụ</label>
                                            <input type="text" value="<?=$category->name ?>" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <button href="#" type="submit" style="color:white" class="rounded-lg bg-current mb-2 mt-4 p-3 w-100 fw-600 fw-700 text-center font-xssss mont-font text-uppercase ls-3 d-block">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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