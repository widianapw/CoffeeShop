@extends('layouts.layout')
@section('title','Register User')
@section('judul','Register User')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name">{{ __('Name') }}</label>


        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>


        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="new-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>


        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">

    </div>

    <div class="form-group">
        <label for="password-confirm">{{ __('Role User') }}</label>
        <select name="is_admin" class="form-control">
            <option value="">Pilih Role</option>
            <option value="0">Kasir</option>
            <option value="1">Admin</option>
        </select>
    </div>
    <br><br>



    <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
    </button>

</form>

@endsection