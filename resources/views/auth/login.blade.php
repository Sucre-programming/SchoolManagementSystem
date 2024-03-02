@extends('layouts.frontend')

@section('content')

<div class="formWrapper">

    <form method="POST" action="{{ route('login') }}" class="loginForm">

        <img alt="logo" class="logo" src="{{ asset('css/images/logo.png') }}">

        <span class="welcomeTxt">

            Welcome to the project EDU system.
            <br>
            Login with your account credentials

        </span>

        @csrf
        <div class="mb-4 inputWrapper">

            <label class="block text-gray-700 font-bold mb-2 inputLabel" for="emailaddress">
                <i class="fas fa-user"></i>
                Email
            </label>

            <input class="rounded w-full py-2 px-3 text-gray-700 
            mb-3 leading-tight userInput" type="email" name="email" id="emailaddress" placeholder="email" value="">

            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-4 inputWrapper">

            <label class="block text-gray-700 font-bold mb-2 inputLabel" for="password">
                <i class="fas fa-key"></i>
                Password
            </label>

            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full 
            py-2 px-3 text-gray-700 mb-3 leading-tight userInput" 
            type="password" name="password" id="password" placeholder="password" value="">
            
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="text-sm">
                    Remember Me
                </span>
            </label>
        </div>

        <div class="flex items-center justify-center">
            <button class="loginBtn" type="submit">
                <i class="fas fa-sign-in"></i>
                Log In
            </button>
        </div>

    </form>

</div>

@endsection
