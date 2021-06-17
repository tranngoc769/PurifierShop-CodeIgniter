<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Sản phẩm</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <div class="text-sm-right">
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i><a href="add_product">Thêm sản phẩm</a></button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>Ngày tạo</th>
                                        <th width="20%">>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $i => $prod) : ?>
                                        <tr>
                                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">#<?= $prod->id ?></a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?= $prod->title ?></a> </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded" >
                                                <?= $prod->date ?>
                                                </button>
                                            </td>
                                            <td>
                                                <a href="del_blog?id=<?=$prod->id?>" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                <a href="edit_blog?id=<?=$prod->id?>" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-square-edit-outline font-size-18"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                            <?php for ($i=1; $i <= $total; $i++): ?>
                                <li class="page-item  <?php if ($page == $i) : ?> active<?php endif; ?>"><a class='page-link' href="blogs?page=<?=$i?>"><?=$i?></a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Skote.
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