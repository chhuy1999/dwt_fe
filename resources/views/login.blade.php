<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/assets/css/variables.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}" />
</head>

<body>
    <div class="wrapper">
        <div class="login_wrapper">
            <div class="login_container">
                <div class="login_content">
                    <div class="login_header">
                        <a href="/">
                            <img src="{{ asset('/assets/img/logo-thaihung-1.jpg') }}" alt="DWT"
                                class="login_logo" />
                        </a>
                        <!-- <h1 class="login_title">Đăng nhập hệ thống DWT</h1> -->
                    </div>
                    <div class="login_body">
                        <form method="POST" action='/login'>
                            @error('error')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" autocomplete="off" class="form-control" id="floatingInput"
                                    placeholder="admin" name='email' />
                                <label for="floatingInput">Tên đăng nhập</label>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" autocomplete="off" class="form-control" id="floatingPassword"
                                    placeholder="matkhau" name='password' />
                                <label for="floatingPassword">Mật khẩu</label>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="login_acceptTerm">Nếu gặp vấn đề hãy liên hệ đến <a href="#">Admin</a></div>
                </div>
                <div class="login_about">
                    Copyright © 2023 - STEAM
                </div>
            </div>
        </div>
    </div>
</body>

</html>
