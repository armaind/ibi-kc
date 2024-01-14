<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; AIBIC</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('stisla/assets/css/components.css') }}">
    <link rel="shortcut icon" href="{{ url('main-assets/images/ibi-logo.png')}}" type="image/x-icon" />
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    {{-- <div class="p-4 m-3"> --}}
                        <div class="login-brand">
                            <img src="{{ url('main-assets/images/ibi-logo.png')}}" alt="logo" width="80"
                                class="shadow-light rounded-circle mt-2">
                            </div>
                            <h4 class="text-center text-dark font-weight-normal">Registrasi <span
                                    class="font-weight-bold">AIBIC</span>
                            </h4>
                            <p class="text-center text-muted">Sebelum memulai, harus mendaftar dengan email dan password anda.</p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="name" class="form-control" name="name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="username" class="form-control" name="username">
                                </div>
                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email">
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-6">
                                      <label for="password" class="d-block">Password</label>
                                      <input class="form-control" type="password" name="password" required>
                                    </div>
                                    <div class="form-group col-6">
                                      <label for="password" class="d-block">Password Confirmation</label>
                                      <input class="form-control" type="password" name="password_confirmation" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                  </div>
                
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                      Register
                                    </button>
                                  </div>
                                </form>
                              </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    Sudah punya akun? <a href="/login">Login</a>
                </div>
                <div class="simple-footer">
                    Copyright &copy; AIBIC 2023
                  </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ url('stisla/assets/js/stisla.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ url('stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ url('stisla/assets/js/custom.js') }}"></script>

</body>

</html>