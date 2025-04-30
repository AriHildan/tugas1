<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | Aplikasi</title>

  <!-- Google Font -->
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

    .register-box {
      width: 450px;
      margin: 4% auto;
    }

    .card {
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      border-top: 4px solid #6610f2;
    }

    .register-logo a {
      font-weight: 600;
      color: #6610f2;
      font-size: 1.8rem;
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

    .text-muted {
      font-size: 0.9rem;
    }

    .social-auth-links .btn-light {
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    #password-error {
      color: red;
      font-size: 0.9rem;
      margin-top: -10px;
      display: none;
    }

    .register a {
      color: #6610f2;
      font-weight: 500;
    }

    .register a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><i class="fas fa-user-plus mr-1"></i><b>Daftar</b>Akun</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Buat akun baru untuk melanjutkan</p>

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('daftar') }}" method="post" onsubmit="return validatePasswords()">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Konfirmasi password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div id="password-error">Password tidak cocok!</div>

          <div class="input-group mb-3">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-map-marker-alt"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP" pattern="^\d{12,13}$" title="Nomor HP harus terdiri dari 12 atau 13 digit angka" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                <label for="agreeTerms">
                  Saya setuju dengan <a href="#">syarat</a>
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </div>
          </div>
        </form>

        <div class="d-flex align-items-center my-3">
          <hr class="flex-grow-1">
          <span class="px-2 text-muted">ATAU</span>
          <hr class="flex-grow-1">
        </div>

        <div class="social-auth-links text-center">
          <a href="/auth/redirect" class="btn btn-block btn-light">
            <i class="fab fa-google text-danger mr-2"></i> Daftar dengan Google
          </a>
        </div>

        <div class="text-center mt-3">
          <span class="text-muted">Sudah punya akun?</span>
          <a href="/" class="register">Login</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

  <script>
    function validatePasswords() {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("password_confirmation").value;
      const error = document.getElementById("password-error");

      if (password !== confirmPassword) {
        error.style.display = "block";
        return false;
      } else {
        error.style.display = "none";
        return true;
      }
    }
  </script>
</body>

</html>