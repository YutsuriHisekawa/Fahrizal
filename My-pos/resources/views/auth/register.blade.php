<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<title>REGISTER</title>
<body>
<div class="box">
    <div class="container">
    <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="top">
            <span> Welcome
            </span>
            <header>Don't have account?</header>
        
        </div>
        <div class="input-field">
        <input id="name" 
            type="name" class="input @error('name') is-invalid @enderror"  name="name" value="{{ old('name') }}"  required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <i class='bx bx-user' ></i>

        </div>
        <div class="input-field">
        <input id="email" 
        type="email" 
        class="input @error('email') is-invalid @enderror"
        name="email" 
        value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        <i class='bx bx-envelope'></i>
        </div>

        <div class="input-field">
        <input id="password" type="password"
        class="input @error('password') is-invalid @enderror" name="password"
        required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
        <input id="password-confirm" type="password" class="input"
        name="password_confirmation" required autocomplete="new-password">
        <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
        <button type="submit" class="submit">{{ __('Register') }}</button>
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
