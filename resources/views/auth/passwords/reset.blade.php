@extends('layouts.app')

@section('content')

@if (session('status'))
  <div class="notification is-success" role="alert">
    {{ session('status') }}
  </div>
@endif

<div class="container p-t-100 p-b-50">

  <div class="columns justify-content-center">

    <div class="column is-one-third is-offset-one-third">
      <div class="card">
        <div class="card-content">
          <h1 class="title">{{ __('Reset Your Password') }}</h1> 
          
          <form method="POST" action="{{ route('register') }}" role="form">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="field">
              <label for="email" class="label">{{ __('E-Mail Address') }}</label>
              <p class="control">
                <input required class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="name@exemplo.com">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
              @endif
            </div>
      
            <div class="field">
              <label for="password" class="label">{{ __('Password') }}</label>
              <p class="control">
                <input required class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" id="password" name="password">
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>

            <div class="field">
              <label for="password_confirmation" class="label">{{ __('Password Confirmation') }}</label>
              <p class="control">
                <input required class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" id="password_confirmation" name="password_confirmation">
              </p>
              @if ($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
              @endif
            </div>
                              
            <button class="button is-primary is-outlined is-fullwidth m-t-30">
              {{ __('Reset Password') }}
            </button>
          </form>
        </div>

      </div>
    </div>
    
  </div>
  <h5 class="has-text-centered m-t-30">
    <a href="{{ route('login') }}" class="is-muted">
      Already have an Account?
    </a>
  </h5>
</div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
