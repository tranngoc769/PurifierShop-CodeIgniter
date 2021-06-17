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
            <?php $cur_cate = $categories_par[0]->id ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh mục</h4>
                            <div class="form-group row">
                                <select id="category_select" class="form-control">
                                    <option value="<?= $cate->id ?>">Tất cả</option>
                                    <?php foreach ($categories_par as $i => $cate) : ?>
                                        <option value="<?= $cate->c_id ?>"><?= $cate->c_name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <select style="height: 30vh;" id="top_select" class="form-control" required multiple>
                                    <?php foreach ($products as $i => $prod) : ?>
                                        <option  tag="<?= $prod->c_id ?>" <?php if(in_array($prod->id, $list_id)):?>selected <?php endif;?> value="<?= $prod->id ?>"><?= $prod->id ?>-<?= $prod->name ?>-<?= $prod->c_name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-footer" style="width:100%">
                            <button id="save_top_product" type="button" class="btn btn-primary  waves-effect waves-light w-sm" style="width:100%">
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