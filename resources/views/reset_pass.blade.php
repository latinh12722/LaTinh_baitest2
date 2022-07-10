@extends('includes.master')
@section('content')

<div class="register_form mx-auto">
    <form action="{{ url('reset-pass') }}" method="post">
        @csrf
        <h5 class="text-uppercase text-center">FORGOT YOUR PASSWORD ?</h5>
        <p>To reset your password, enter the email address that you used to set up your account. We'll send you a link to help you get back into your account.</p>
        <h6>Password</h6>
        <div class="pass">
            <input type="password" onChange="onChange()" title="Your password must have at least: 1 Lowercase, 1 Uppercase, and Digits and Use from 6 characters" name="password" id="password_reset" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$" required />
            <i data-idinputpass="password_reset" class="fas fa-eye-slash togglePassword" id="togglePassword"></i>
        </div>
    <input type="hidden" name="token" value="{{ $token }}">
        <h6>Confirm Password</h6>
        <div class="pass">
            <input type="password" onChange="onChange()" name="confirm_password" id="confirm_password_reset" required />
            <i data-idinputpass="confirm_password_reset" class="fas fa-eye-slash togglePassword" id="togglePassword"></i>
        </div>


        <button id="btn-register" type="submit">Reset password</button>
    </form>
</div>


@endsection