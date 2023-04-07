<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<title>LOGIN</title>
<body>
<div class="box">
    <div class="container">
    <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="top">
            <span>WELCOME TO MAGIC
            </span>
            <header>Login</header>
        
        </div>
        <div class="input-field">
        <input id="email" 
            type="email" 
            class="input @error('email') is-invalid @enderror" 
            name="email" value="{{ old('email') }}" 
            required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input id="password" 
            type="password" 
                class="input @error('password') is-invalid @enderror" 
                    name="password" 
                        required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
        <button type="submit" class="submit">{{ __('Login') }}</button>
        </div>
</br>

        <div class="two-col">
            <div class="one">
            <input type="checkbox" name="remember" id="remember" {{
                old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
            </label>

            </div>
            <div class="two">
                <label><a href="{{ route('password.request') }}">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
