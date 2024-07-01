

<x-guest-layout>
  <!-- Session Status -->
  
  @extends('layouts.app')
  <main class="main-content mt-0 ps" >

      <section>
          <div class="page- min-vh-75" >
              <div class="container">
                  <div class="row">
                      <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto" style="margin-top:-160px">
                          <div class="card card-plain mt-8">
                              <div class="card-header pb-0 text-left bg-transparent">
                                  <h3 class="font-weight-bolder text-info text-gradient">Welcome Back</h3>
                                  <p class="mb-0">Enter your email and password to sign in</p>
                              </div>

                              <div class="card-body">

                              <form method="POST" action="{{ url('login') }}">
      @csrf

      <!-- Email Address -->
      <div class="mb-3">
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="form-control" placeholder="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mb-3">
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" class="form-control" placeholder="password" type="password" name="password" :value="old('password')" required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
              <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
              <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
      </div>

      <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
              <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
              </a>
          @endif
          <x-primary-button class="btn bg-primary w-100 mt-4 mb-0">
              {{ __('Log in') }}
          </x-primary-button>
      </div>
      
  </form>
                              </div>


                              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                              <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a  href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Sign up</a>

                  {{-- <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a> --}}
                </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-6">
            <div class="oblique position-fixed top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6">
                <img src="{{ asset('img/curved6.jpg') }}">
              </div>
            </div>
          </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"></div>
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>


      <footer class="footer py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                  Pricing
                </a>
              </div>
              <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                  Copyright © <script>
                    document.write(new Date().getFullYear())
                  </script>2024 Soft by Creative Tim.
                </p>
              </div>
            </div>
          </div>
        </footer>
  
  </main>
  <x-auth-session-status class="mb-4" :status="session('status')" />
 
</x-guest-layout>
