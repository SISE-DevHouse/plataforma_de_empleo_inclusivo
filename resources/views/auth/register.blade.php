@extends('layouts.app')

@section('content')

<section class="pabsolutetop py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- -->

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name">
                                <label for="floatingInput">Username</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email">
                                <label for="floatingEmail">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                <label for="floatingPassword">password-confirm</label>
                            </div>
                            <!-- -->
                            <div class="row mb-0">
                                <div class="col-md-15 offset-md-15">
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

</section>
<br><br><br>


@endsection