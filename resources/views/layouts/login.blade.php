<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Aplikasi</title>

  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f6f9;
    }

    .login-box {
      width: 400px;
      margin: 6% auto;
    }

    .card {
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      border-top: 4px solid #6610f2;
    }

    .card-header .h1 {
      font-weight: 600;
      color: #6610f2;
    }

    .login-box-msg {
      font-size: 1rem;
      color: #444;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      background-color: #6610f2;
      border-color: #6610f2;
      border-radius: 8px;
    }

    .btn-primary:hover {
      background-color: #4b0cc4;
      border-color: #4b0cc4;
    }

    .social-auth-links .btn-light {
      border-radius: 8px;
      color: #444;
      border: 1px solid #ccc;
    }

    .social-auth-links .btn-light:hover {
      background-color: #e8e8e8;
    }

    .forget-password,
    .register {
      color: #6610f2;
      font-weight: 500;
    }

    .forget-password:hover,
    .register:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><i class="fas fa-tools mr-1"></i><b>Bengkel</b>Koding</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silakan masuk untuk melanjutkan</p>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="text-right mb-3">
            <a href="/email" class="forget-password">Forgot password?</a>
          </div>
          <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>

        <div class="d-flex align-items-center my-3">
          <hr class="flex-grow-1">
          <span class="px-2 text-muted">OR</span>
          <hr class="flex-grow-1">
        </div>

        <div class="social-auth-links text-center">
          <a href="/auth/redirect" class="btn btn-block btn-light">
            <i class="fab fa-google text-danger mr-2"></i> Sign in with Google
          </a>
        </div>

        <div class="text-center mt-3">
          <span style="color:gray;">Don’t have an account?</span>
          <a href="/register" class="register">Register</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>

</html>