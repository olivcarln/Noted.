@extends('layouts.app')

@section('content')
    

<div class="login-container">
  <div class="login-left">
    <h2 class="fw-bolder mb-3" style="color: #442521; font-weight: 800;">Welcome Back!</h2>
    <p class="text-muted mb-4" style="max-width: 280px;">Keep your thoughts, ideas, and to-dos in one secure place — ready whenever you are.</p>
    
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="mb-3 position-relative">
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
        <i class="fa-solid fa-eye-slash form-toggle" id="togglePassword"></i>
        @error('password')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            Remember Me
          </label>
        </div>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-muted" style="font-size: 0.875rem;">Forgot Password?</a>
        @endif
      </div>

      <div class="text-center mt-2 w-100 mb-3">
        <button type="submit" class="tbc-btn">Login</button>
      </div>

      <div class="divider"><span>or continue with</span></div>
      <div class="d-flex justify-content-center social-icons mb-3">
        <i class="fab fa-google"></i>
        <i class="fab fa-github"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <p class="register-link text-center">Don’t have an account? 
        <a href="{{ route('register') }}">Register now</a>
      </p>
    </form>
  </div>

  <div class="login-right">
    <img src="{{ asset('assets/icon-login (2).svg')}}" alt="">
  </div>
</div>

<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('password');
  if (togglePassword && passwordField) {
    togglePassword.addEventListener('click', () => {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      togglePassword.classList.toggle('fa-eye');
      togglePassword.classList.toggle('fa-eye-slash');
    });
  }
</script>

<style>
    <style>
    body {
      font-family: 'DM Sans', sans-serif;
      background: #f7f4f1;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 0;
    }


    .login-container {
      background: #fffaf7;
      border-radius: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      display: flex;
      justify-content: space-between;
      overflow: hidden;
      width: 90%;
      max-width: 900px;
      transition: transform 0.4s ease-in-out, box-shadow 0.4s ease;
      margin: auto;
    }


    .login-container:hover {
      transform: scale(1.01);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
    }


    .login-left,
    .login-right {
      flex: 1;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }


    .login-right {
      margin-right: 1rem;
      background: url('asset/hero-icon.svg') no-repeat center center/contain;
    }


    .form-control {
      border-radius: 2rem;
      padding: 0.75rem 1.25rem;
      border: 1px solid #ddd;
      transition: 0.3s ease;
    }


    .form-control:focus {
      border-color: #724f48;
      box-shadow: 0 0 0 0.25rem rgba(114, 79, 72, 0.2);
    }


   .tbc-btn {
  background-color: #724F48; /* Coklat tua */
  color: #fff;
  width: 100%;
  border: none;
  padding: 8px 16px;
  border-radius: 22px;
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  font-weight: 700;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}


.tbc-btn:hover {
  background-color: #5e3f3a;
  transform: translateY(-2px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}


.tbc-btn:active {
  transform: translateY(1px);
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
}


    .form-toggle {
      cursor: pointer;
      color: #aaa;
      position: absolute;
      right: 1.5rem;
      top: 50%;
      transform: translateY(-50%);
      transition: color 0.3s ease;
    }


    .form-toggle:hover {
      color: #724f48;
    }


    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      margin: 1.5rem 0;
    }


    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: #ccc;
    }


    .divider span {
      padding: 0 1rem;
      color: #999;
      font-size: 0.875rem;
    }


    .social-icons i {
      font-size: 1.25rem;
      margin: 0 0.5rem;
      color: #FFFCF7;
      background: #4B322D;
      padding: 0.5rem;
      border-radius: 50%;
      cursor: pointer;
      transition: transform 0.3s ease, background 0.3s;
    }


    .social-icons i:hover {
      transform: scale(1.2);
      background: #59332e;
    }


    .register-link a {
      color: #4a2d29;
      font-weight: 500;
      text-decoration: none;
    }


    .register-link a:hover {
      text-decoration: underline;
    }


    .position-relative {
      position: relative;
    }
  </style>
</style>
@endsection