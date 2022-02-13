@extends('layouts.admin')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
              {{-- <div class="nav-get-started">
                <p>Don't have an account?</p>
                <a class="btn get-started-btn" href="#">GET STARTED</a>
              </div> --}}
              <form method="POST" action="{{ route('login') }}">
                @csrf
                 <h3 class="mr-auto">Simple Task .</h3>
                <p class="mb-5 mr-auto">Color Experts International,Inc</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-user"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type valid email address here">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type password here">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
                <div class="form-group d-flex justify-content-between">
                    {{-- <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked="">
                        Keep me signed in
                      <i class="input-helper"></i></label>
                    </div> --}}
                    {{-- <a href="#" class="text-small forgot-password text-black">Forgot Password</a> --}}
                  </div>

                <div class="form-group">
                  <button class="btn btn-primary submit-btn">SIGN IN</button>
                </div>
                {{-- <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Copyright © 2018 Bootstrapdash. All rights reserved.</p>
                  <ul class="auth-footer text-gray">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                  </ul>
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  @endsection
