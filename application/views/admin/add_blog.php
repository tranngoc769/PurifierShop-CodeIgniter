<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Thêm bài viết</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tiêu đề</h4>
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input class="form-control" id="title" type="text" value="Hướng dẫn ..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bài viết khuyến mãi</h4>
                            <div class="form-group row">
                                <div class="col-md-10">
                                <select id="p_isSale" class="form-control" required>
                                        <option value="0" selected>Không</option>
                                        <option value="1">Có</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tải lên ảnh đại diện</h4>
                            </p>
                            <div>
                                <input name="file" id="images" type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông tin chi tiết</h4>
                            <p class="card-title-desc">Chi tiết bài đăng</p>

                            <div class="summernote"></div>
                        </div>
                        <div class="card-footer" style="width:100%">
                            <button id="save_blog" type="button" class="btn btn-primary  waves-effect waves-light w-sm" style="width:100%">
                                <i class="mdi mdi-upload d-block font-size-16"></i> Lưu bài viết
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                </div>
                <!-- end col -->
            </div>
        
            <div class="row">
               
            </div>
        
        
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Design & Develop by Trần Ngọc
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

</div>
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="/style/admin/assets/libs/jquery/jquery.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/style/admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/style/admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/style/admin/assets/libs/node-waves/waves.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/style/admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="/style/admin/assets/libs/%40chenfengyuan/datepicker/datepicker.min.js"></script>
<script src="/style/admin/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="/style/admin/assets/libs/summernote/summernote-bs4.min.js"></script>
<script src="/style/admin/assets/js/pages/form-editor.init.js"></script>
<script src="/style/admin/assets/js/app.js"></script>
<script src="/style/admin/assets/js/main.js"></script>
</body>
</html>
