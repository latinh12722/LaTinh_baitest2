@extends('includes.master')
@section('content')

<div class="register_form mx-auto">
    
    <form action="{{ url('login') }}" method="post">
        @csrf
        <h5 class="text-uppercase text-center">LOG IN TO YOUR ACCOUNT</h5>
        <h6>Email</h6>
        <input type="email" name="email" required>
        <h6>Password</h6>
        <div class="pass">
            <input type="password" name="password" id="password" />
            <i data-idinputpass="password" class="fas fa-eye-slash" id="togglePassword"></i>
        </div>
        <button id="btn-register"type="submit">Login</button>
    </form>
    <div class="text-center">
    <a href="">Forgot your password?</a>
    </div>
</div>
<div class="text-center register_footer">
    <h4>Don't have an account? <span><a class="text-decoration-none" href="{{ route('signup') }}">Register</a></span></h4>
</div>


@endsection