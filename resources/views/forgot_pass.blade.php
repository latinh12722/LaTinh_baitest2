@extends('includes.master')
@section('content')

<div class="register_form mx-auto">
    <form action="{{ url('forgot-pass') }}" method="post">
        @csrf
        <h5 class="text-uppercase text-center">FORGOT YOUR PASSWORD ?</h5>
        <p>To reset your password, enter the email address that you used to set up your account. We'll send you a link to help you get back into your account.</p>
        <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
        <button id="btn-register" type="submit">Send</button>
    </form>
</div>


@endsection