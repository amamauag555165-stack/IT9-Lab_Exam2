<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 400px;">
    <h2 class="text-center mb-4">Login</h2>

    <!-- Session Status -->
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                id="email"
                name="email" 
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                required autofocus>
            
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                id="password"
                name="password" 
                class="form-control @error('password') is-invalid @enderror"
                required>
            
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
            <label class="form-check-label" for="remember_me">Remember me</label>
        </div>

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <div class="mb-3 text-end">
                <a href="{{ route('password.request') }}" class="text-decoration-none">
                    Forgot your password?
                </a>
            </div>
        @endif

        <!-- Submit -->
        <button type="submit" class="btn btn-primary w-100">
            Log in
        </button>
    </form>
</div>

</body>
</html>