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
          <h1 class="title">{{ __('Forgot Password?') }}</h1> 
          
          <form method="POST" action="{{ route('password.email') }}" role="form">
            @csrf

            <div class="field">
              <label for="email" class="label">{{ __('E-Mail Address') }}</label>
              <p class="control">
                <input required class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="name@exemplo.com">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
              @endif
            </div>
           
            <button class="button is-success is-outlined is-fullwidth m-t-30">
              {{ __('Get Reset Link') }}
            </button>
          </form>
        </div>

      </div>
    </div>
    
  </div>
  <h5 class="has-text-centered m-t-30">
    <a href="{{ route('login') }}" class="is-muted">
      Back to login
    </a>
  </h5>
</div>
@endsection

{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
