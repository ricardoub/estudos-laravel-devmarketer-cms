@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="tlte">
          Create New User
        </h1>
      </div>
    </div>

    <hr class="m-t-0">

    <div class="columns m-t-10">
      <div class="column">
        <form action="{{route('users.store')}}" method="post">
          {{csrf_field()}}

          <div class="columns">
            <div class="column">
              <div class="field">
                <label for="name" class="label">Name</label>
                <p class="control">
                  <input type="text" class="input" name="name" id="name">
                </p>
              </div>
     
              <div class="field">
                <label for="email" class="label">E-mail</label>
                <p class="control">
                  <input type="text" class="input" name="email" id="email">
                </p>
              </div>
    
              <div class="field">
                <label for="password" class="label">Password</label>
                <p class="control">
                  <input type="text" class="input" name="password" id="password" 
                    v-if="!auto_password" placeholder="Manually give a password">
                  <b-checkbox class="m-t-10" name="auto_generate" 
                    :checked="true" v-model="auto_password">
                    Auto Genetrate Password
                  </b-checkbox>
                </p>
              </div>              
            </div>
          
            <div class="column">
              <label for="roles" class="label">Roles:</label>
              <input type="hidden" name="roles" :value="rolesSelected" />
    
                @foreach ($roles as $role)
                  <div class="field">
                    <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                  </div>
                @endforeach
            </div>
          </div> <!-- end of .columns for forms -->
          
          <div class="columns">
            <div class="column">
              <hr />
              <button class="button is-primary is-pulled-right" style="width: 250px;">Create New User</button>
            </div>
          </div>
 
        </form>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true,
        rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
      }
    });
  </script>
@endsection