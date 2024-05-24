<x-guest-layout>

    @extends('layouts.app')

    <main class="main-content mt-0 ps" >

        <section class=" mb-8 position-relative">
            <div class="page- min-vh-75" >
                <div class="container">
                    <div class="row">
                        <div class="page-header align-items-start min-vh-80 pt-5 pb-11 m-3 border-radius-lg"
                              style="background-image: url('{{ asset('img/white-curved.jpeg') }}');     padding:350px;">
                            <div class="card card-plain mt-4">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Forgot your password?</h3>
                                    <p class="mb-0">Enter your email to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                
                                        <!-- Email Address -->
                                        <div class="mb-3">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                
                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button>
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div> --}}



            {{-- <div class="page-header align-items-start min-vh-80 pt-5 pb-11 m-3 border-radius-lg"
                 style="background-image: url('{{ asset('img/white-curved.jpeg') }}');    height: 350px;">
        </div> --}}
            {{-- <div class="page- min-vh-75" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto" style="margin-top:-470px">
                            <div class="card card-plain mt-8"> --}}
                                {{-- <div class="mb-4 text-sm text-gray-600">
                                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                </div> --}}
                                {{-- <h5>  {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</h5> --}}
                                {{-- <div class="card-body">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                
                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                
                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button>
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                            </div>
                        </div>
        </section>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
