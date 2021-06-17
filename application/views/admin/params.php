<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Top 10 Sản Phẩm</h4>
                    </div>
                </div>
            </div>
            <form id="form_params">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Từ khóa</h4>
                            <?php foreach ($keywords as $i => $kw) : ?>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-md-2 col-form-label"><?= $kw->name ?></label>
                                    <div class="col-md-10" tag="keys">
                                        <input class="form-control" name="k_name_<?= $kw->id ?>" value="<?= $kw->id ?>" readonly type="number" hidden>
                                        <input class="form-control" name="k_value_<?= $kw->id ?>" value="<?= $kw->text ?>"  type="text" required>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Đường dẫn ảnh mặc định - Không thể cập nhật</h4>
                            <?php foreach ($default_images as $i => $kw) : ?>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-md-2 col-form-label"><?= $kw->name ?></label>
                                    <div class="col-md-10" tag="images">
                                        <input class="form-control" name="d_name_<?= $kw->id ?>" value="<?= $kw->id ?>" readonly type="number" hidden>
                                        <input class="form-control" name="d_value_<?= $kw->id ?>" value="<?= $kw->path ?>" readonly type="text" required>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-footer" style="width:100%">
                            <button id="save_params" type="button" class="btn btn-primary  waves-effect waves-light w-sm" style="width:100%">
                                <i class="mdi mdi-upload d-block font-size-16"></i> Lưu
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