@extends('layouts.frontend')
@section('content')

@include('messages.flash')
    <!-- Login Form -->
    <section id="login-section" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center">

            <div class="box">
                <div class="d-flex justify-content-center">
                    <div class="logo-box">
                        <img src="{{ asset('img/form-img.png') }}" class="logo" alt="Logo">
                    </div>
                </div>

                <div class="d-flex justify-content-center form-container">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                            <span class="input-group-text" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                <i class="fas fa-user"></i>
                            </span>
                            </div>
                            <input type="text" name="email" id="email" class="form-control input-user" value="" placeholder="E-pošta">
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                            <span class="input-group-text" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
                                <i class="fas fa-unlock-alt"></i>
                            </span>
                            </div>

                            <input type="password" name="password" id="password" class="form-control input-pass" value="" placeholder="Lozinka">
                        </div>

                        <!-- <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline" style="color: #ffffff">Zapamti me</label>
                            </div>
                        </div> -->

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <!--<button type="button" name="button" class="btn login-btn">ULAZ</button>-->
                            <button type="submit" name="login" class="btn login-btn">ULAZ</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        <a href="#" style="text-decoration: none; color: #ffffff;">Zaboravljena lozinka?</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
