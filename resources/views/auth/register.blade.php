@extends('layouts.adminlayout')
@section('body')
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-20">The Admin Template For Perfectionist</div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="form-control" type="text" placeholder="Enter Name" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-2 form-group">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="form-control" type="email" placeholder="Enter mail" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-2 form-group">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="form-control" placeholder="Enter Password" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-2 form-group">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="form-control" type="password" placeholder="Enter Confirm Password" name="password_confirmation"
                        required />
                </div>
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
                <div class="flex items-center justify-end mt-2">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                </div>
            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
@endsection
