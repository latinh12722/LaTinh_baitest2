@extends('includes.master')
@section('content')

<h5 class="text-uppercase text-center">Hello {{Request::session()->get('name')}}</h5>
<form class="text-center my-5 py-5" action="{{ url('logout') }}" method="get">
    @csrf
    <input id="btn-logout" type="submit" value="Logout">
</form>


@endsection