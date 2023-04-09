<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Đăng nhập - {{ env('SLOGAN_URL', ''); }}</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{ env('FAVICON_URL', ''); }}">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

<!-- Vendor CSS Files -->
<link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/variables.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="login_wrapper">
            <div class="login_container">
                <div class="login_content">
                    <div class="login_header">
                        <a href="/">
                            <img src="{{ env('LOGO_URL', ''); }}" alt="logo"
                                class="login_logo" />
                        </a>
                        <!-- <h1 class="login_title">Đăng nhập hệ thống DWT</h1> -->
                    </div>
                    <div class="login_body">
                        {{-- login error --}}
                        @if (session('loginError'))
                            <div class="alert alert-danger">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" autocomplete="off" class="form-control" id="floatingInput"
                                    placeholder="admin" name="email" />
                                <label for="floatingInput">Tên đăng nhập</label>
                            </div>
                            @error('email')
                                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                                <div class="alert alert-danger">Tên tài khoản hoặc mật khẩu không chính xác</div>
                            @enderror
                            <div class="form-floating mb-3">
                                <input type="password" autocomplete="off" class="form-control" id="floatingPassword"
                                    placeholder="matkhau" name="password" />
                                <label for="floatingPassword">Mật khẩu</label>
                            </div>
                            @error('email')
                                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                                <div class="alert alert-danger">Tên tài khoản hoặc mật khẩu không chính xác</div>
                            @enderror
                            <div class="d-grid">
                                <button class="btn btn-login text-uppercase fw-bold h-100" type="submit">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="login_acceptTerm">Nếu gặp vấn đề hãy liên hệ đến <a href="#">Admin</a></div>
                </div>
            </div>
            <div class="login_about">
                Thái Bình Hưng Thịnh - Powered by STeam
            </div>
        </div>
    </div>
    </div>
</body>

</html>
