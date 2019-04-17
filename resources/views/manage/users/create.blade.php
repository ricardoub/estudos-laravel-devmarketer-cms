@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="tlte">
          Create Neew User
        </h1>
      </div>
    </div>

    <hr class="m-t-0">

    <div class="columns m-t-10">
      <div class="column">
        <form action="{{route('users.store')}}" method="post">
          
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
              <input type="text" class="input" name="password" id="password">
              <b-checkbox class="m-t-10" name="auto_generate" :checked="true">
                Auto Genetrate Password
              </b-checkbox>
            </p>
          </div>

          <button class="button is-success">Create User</button>
  
        </form>
      </div>
    </div>
  </div>
@endsection