    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Chào mừng đến trang đăng nhập</h5>
                                            <p>Đăng nhập để quản lý.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/style/admin/assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="/">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/style/admin/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="/index.php/account/login">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input value="admin" type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input value="admin@1234"  type="password" class="form-control"  name="password"  id="userpassword" placeholder="Enter password">
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Trần Ngọc</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
