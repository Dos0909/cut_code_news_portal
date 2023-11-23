{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.app')



@section('title', 'Вход')


@section('content')

<h1 class="text-3xl font-medium">Вход</h1>

<form method="POST" action="{{ route('login') }}" class="space-y-5 mt-5">
    @csrf

    <input name="email" type="text"
        class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
        placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus />

    @error('email')
    <p class="text-red-500">{{ $message }}</p>
    @enderror



    <input name="password" type="password"
        class="w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-500 @enderror"
        placeholder="Пароль" required autocomplete="current-password" />
    @error('password')
    <p class="text-red-500">{{ $message }}</p>
    @enderror

    <div>
        <a href="{{ route('password.request') }}"
            class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
    </div>

    <div>
        <a href="{{route('register')}}"
            class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
    </div>

    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
</form>

@endsection