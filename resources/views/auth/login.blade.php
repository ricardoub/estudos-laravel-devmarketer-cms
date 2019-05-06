@extends('layouts.app')

@section('content')
<div class="container p-t-100 p-b-50">

  <div class="columns justify-content-center">

    <div class="column is-one-third is-offset-one-third">
      <div class="card">
        <div class="card-content">
          <h1 class="title">{{ __('Login') }}</h1> 
          
          <form method="POST" action="{{ route('login') }}" role="form">
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

            <div class="field">
              <label for="password" class="label">{{ __('Password') }}</label>
              <p class="control">
                <input required class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" id="password" name="password">
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
              @endif
            </div>

            <b-checkbox name="remember" class="m-t-20">Remember Me</b-checkbox>
            
            <button class="button is-success is-outlined is-fullwidth m-t-30">
              {{ __('Login In') }}
            </button>
          </form>
        </div>

      </div>
    </div>
    
  </div>
  <h5 class="has-text-centered m-t-30">
    <a href="{{ route('password.request') }}" class="is-muted">
      Forgot your Password?
    </a>
  </h5>
</div>
@endsection

@section('scripts')

<script>
  var app = new Vue({
    el: '#app'
  });
</script>
    
@endsection
