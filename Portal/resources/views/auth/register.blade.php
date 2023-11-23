{{-- @extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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



@section('title', 'Регистрация')


@section('content')



<h1 class="text-3xl font-medium">Регистрация</h1>

<form action="{{ route('register') }}" class="space-y-5 mt-5" method="POST">
    @csrf
    <input name="name" type="text"
        class="w-full h-12 border  border-gray-800 rounded px-3 @error('name') border-red-500 @enderror"
        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Имя" />
    @error('name')
    <p class="text-red-500">{{ $message }}</p>
    @enderror

    <input name="email" type="text"
        class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
        placeholder="Email" value="{{ old('email') }}" required autocomplete="email" />

    @error('email')
    <p class="text-red-500">{{ $message }}</p>
    @enderror

    <input name="password" type="password"
        class="w-full h-12 border border-gray-800 rounded px-3 @error('password') border-red-500 @enderror"
        placeholder="Пароль" required autocomplete="new-password" />
    @error('password')
    <p class="text-red-500">{{ $message }}</p>
    @enderror

    <input name="password_confirmation" type="password"
        class="w-full h-12 border border-gray-800 rounded px-3 @error('password_confirmation') border-red-500 @enderror"
        placeholder="Подтверждение пароля" required autocomplete="new-password" />
    @error('password_confirmation')
    <p class="text-red-500">{{ $message }}</p>
    @enderror

    <div>
        <a href="{{route('login')}}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть
            аккаунт?</a>
    </div>

    <button type="submit"
        class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
</form>


@endsection