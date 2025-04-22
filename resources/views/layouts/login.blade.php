<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Aplikasi</title>

  @include('layouts.lib.ext_css')

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background: url('https://png.pngtree.com/thumb_back/fw800/background/20250227/pngtree-a-vibrant-futuristic-cityscape-with-neon-lights-and-intricate-roadways-image_17003766.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

    .login-box {
      width: 100%;
      max-width: 420px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 2rem;
      color: #fff;
      animation: fadeSlideIn 1s ease;
    }

    @keyframes fadeSlideIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card-header .h1 {
      font-size: 2.5rem;
      font-weight: 600;
      color: #fff;
      margin-bottom: 1rem;
    }

    .login-box-msg {
      font-size: 1rem;
      color: #ddd;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 30px;
      padding: 0.75rem 1.2rem;
      color: #fff;
      transition: all 0.3s ease;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.2);
      outline: none;
      box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.2);
    }

    .input-group-text {
      background: transparent;
      border: none;
      color: #fff;
    }

    .btn-primary {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      border: none;
      border-radius: 30px;
      padding: 0.75rem;
      font-weight: 600;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      box-shadow: 0 0 15px rgba(0, 114, 255, 0.5);
    }

    .alert {
      border-radius: 10px;
      background-color: rgba(255, 0, 0, 0.1);
      color: #ffdddd;
      font-size: 0.9rem;
    }

    .toggle-password {
      cursor: pointer;
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Bengkel</b>Koding</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login Dulu Boy</p>

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
        <div class="input-group mb-4">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text toggle-password" onclick="togglePassword()">
              <span class="fas fa-eye" id="eye-icon"></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
    </div>
  </div>

  @include('layouts.lib.ext_js')

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      const icon = document.getElementById('eye-icon');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }
  </script>
</body>
</html>