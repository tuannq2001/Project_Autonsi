<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng ký</title>
        <link rel="stylesheet" href="{{asset('main.css')}}">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error }}</li>
                                    @endforeach
                                    </ul>
                                    </div>
                                @endif
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ĐĂNG KÝ</h3></div>
                                    <div class="card-body">
                                        <form role="form" action="{{route('xl-dang-ki')}}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="username" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Tên đăng nhập</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Địa chỉ Email</label>
                                            </div>
                                            {{-- <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Mật khẩu" />
                                                <label for="inputPassword">Mật khẩu</label>


                                            </div> --}}
                                            <div class="form-floating mb-3 position-relative">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Mật khẩu" />
                                                <label for="inputPassword">Mật khẩu</label>
                                                <span id="togglePassword" class="toggle-password">
                                                    <i class="fas fa-eye-slash" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputRePassword" name="repassword" type="password" placeholder="Nhập lại mật khẩu" />
                                                <label for="inputRePassword">Nhập lại mật khẩu</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword"  type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Nhớ mật khẩu</label>
                                            </div>
                                            <div style="text-align: center;">
                                                <button type="submit" class="btn btn-primary" href="index.html">Đăng ký</button>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('homepage')}}">Đăng nhập</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> &copy; AutonSI</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
