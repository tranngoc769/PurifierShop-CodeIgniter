<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Thêm sản phẩm</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông tin cơ bản</h4>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-md-10">
                                    <input class="form-control" id="p_name" type="text" value="SP Test" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-md-2 col-form-label">Giá sản phẩm</label>
                                <div class="col-md-10">
                                    <input class="form-control" id="p_price" value="11111111111" type="number" step="50000" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-md-2 col-form-label">Khuyến mãi</label>
                                <div class="col-md-10">
                                    <input class="form-control" id="p_price" value="11111111111" type="number" step="50000" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <select id="p_isSale" class="form-control" required>
                                            <option value="0">Không khuyến mãi</option>
                                            <option value="1">Khuyến mãi phần trăm</option>
                                            <option value="2">Khuyến mãi giá</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="p_saleAmount" value="0" type="number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Loại sản phẩm</label>
                                <div class="col-md-10">
                                    <select id="p_category" class="form-control" required>
                                        <?php foreach ($categories_par as $i => $cat) : ?>
                                            <option value="<?= $cat->c_id ?>"><?= $cat->c_name ?></option>
                                        <?php endforeach; ?>
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
                            <h4 class="card-title">Thông tin cấu hình</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap mb-0" id="thongsoTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Thuộc tính</th>
                                            <th style="width: 50%;">Thông số</th>
                                            <th style="width: 20%;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr tag="prop">
                                            <td>
                                                <input class="form-control form-control-sm" value="SPTest" type="text" placeholder="Tên thuộc tính">
                                            </td>
                                            <td>
                                                <input value="PROP Tesst" class="form-control form-control-sm" type="text" placeholder="Thông số">
                                            </td>
                                            <td>
                                                <div class="custom-control form-control-sm mb-3">
                                                    <input type="checkbox" checked>
                                                    <label for="customCheck-outlinecolor2">Active</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button id="addProperty" type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="bx bx-smile font-size-16 align-middle mr-2"></i> Thêm thông số
                                </button>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Tải lên hình ảnh</h4>
                            <p class="card-title-desc">Hình đầu tiên sẽ được chọn làm ảnh đại diện
                            </p>
                            <div>
                                <form action="#" id="dropzone" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" id="images" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        </div>
                                        <h4>Kéo thả hoặc click để upload file.</h4>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thông tin chi tiết</h4>
                            <p class="card-title-desc">Chi tiết sản phẩm</p>

                            <div class="summernote"></div>
                        </div>
                        <div class="card-footer" style="width:100%">
                            <button id="save_product" type="button" class="btn btn-primary  waves-effect waves-light w-sm" style="width:100%">
                                <i class="mdi mdi-upload d-block font-size-16"></i> Lưu sản phẩm
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