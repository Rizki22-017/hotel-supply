@extends('layout.app')
@section('content')


<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center"
style="padding-top: 0px">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <!-- Card Login -->
            <div class="card" style="width: 40rem">
                <div class="d-flex justify-content-center py-2">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('assets/img/logo360.png') }}" alt=""
                            style="width: 150px; height: 150px; object-fit: contain;">
                    </a>
                </div>
                <div class="card-body">

                    <!-- Form -->
                    <form method="POST" action="{{ route('val-forgot-pass-act') }}" class="row g-3 needs-validation" novalidate>
                        @csrf

                        <!-- Error Message -->
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @error('password')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @enderror

                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- Input Email -->
                        <div class="col-12">
                            <label for="email" class="form-label">Enter your new password</label>
                            <div class="input-group has-validation">
                                {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                                <input type="password" name="password" class="form-control" id="email"
                                    placeholder="New password" required autofocus>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 mt-2" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

