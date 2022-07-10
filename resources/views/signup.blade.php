@extends('includes.master')
@section('content')

<div class="register_form mx-auto">

    <form action="{{ url('signup') }}" method="post">
        @csrf
        <h5 class="text-uppercase">REGISTER</h5>
        <h6>Username</h6>
        <input type="name" name="name" required>
        <h6>Email</h6>
        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        <h6>Password</h6>
        <div class="pass">
            <input type="password" name="password" id="password" title="Your password must have at least: 1 Lowercase, 1 Uppercase, and Digits and Use from 6 characters" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$" required />
            <i data-idinputpass="password" class="fas fa-eye-slash" id="togglePassword"></i>
        </div>
        <button id="btn-register" type="submit">Register</button>
        <p>By registering I confirm I have read and agree to Terms of Use. We send occasional marketing messages which can be switched off in account settings. We manage personal data as set out in our Privacy Notice.</p>
    </form>
</div>
<div class="text-center register_footer">
    <h4>Already have an account? <span><a class="text-decoration-none" href="{{ route('login') }}">Login</a></span></h4>
</div>


@endsection