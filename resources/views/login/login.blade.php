@extends('layout.app')

@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center"
        style="padding-top: 0px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <!-- Card Login -->
                    <div class="card">
                        <div class="d-flex justify-content-center py-2">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/img/logo360.png') }}" alt=""
                                    style="width: 150px; height: 150px; object-fit: contain;">
                            </a>
                        </div>
                        <div class="card-body">

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Error Message -->
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @error('email')
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @enderror

                                <!-- Input Email -->
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group has-validation">
                                        {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email Address" required autofocus>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>

                                <!-- Input Password -->
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 mt-2" type="submit">Login</button>
                                </div>
                            </form>
                            <div style="padding-top: 0.5rem">
                                <a href="{{ route('forgot-pass') }}" class=" w-100 mt-2">Forgot Password</a>
                                <p>Haven't registered yet? <a href="{{ route('register') }}">Register</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
