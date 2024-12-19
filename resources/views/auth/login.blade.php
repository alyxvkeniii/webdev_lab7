@extends('components.layout2')

@section('content')
<div class="container">
    <header>

        <div class="logo">
            <a href="/">
                <img src="/assets/images/logo.png" alt="Logo">
            </a>
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('faq') }}" class="button"><b>FAQ</b></a></li>
            </ul>
        </nav>

    </header>
<!-- END OF HEADER -->

<div class="container">
    <h2>Log in</h2>
    <p>Please enter email address and password.</p>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Input -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email (Example: hello@gmail.com)" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password..." name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn">Login</button>
        <div class="dont">
            <p>Don't have an account? <a href="{{ route('sign-up') }}" class="button"><b>Sign Up</b></a></p>
        </div>

    </form>
    <!-- END of Login Form -->
</div>

<!-- FOOTER -->
    <footer>
        <p>&copy;2024 PICKK Recipe</p>
        <div class="footer-links">
            <a href="/terms">Terms of Use</a>
            <a href="/policy">Privacy Policy</a>
        </div>
    </footer>
</div>
@endsection
