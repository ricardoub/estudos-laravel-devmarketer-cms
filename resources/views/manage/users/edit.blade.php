@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('users.update', $user->id)}}" method="POST">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <div class="columns">
        <div class="column">
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <b-radio-group v-model="password_options">
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="keep">Do Not Change Password</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="auto">Auto-Generate New Password</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="manual">Manually Set New Password</b-radio>
                <p class="control m-t-10">
                  <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                </p>
              </div>
            </b-radio-group>
          </div>
        </div> <!-- end of .column -->
      </div>
      <div class="columns">
        <div class="column">
          <hr />
          <button class="button is-primary is-pulled-right" style="width: 250px;">Edit User</button>
        </div>
      </div>
    </form>

  </div> <!-- end of .flex-container -->
@endsection


@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep'
      }
    });
  </script>
@endsection