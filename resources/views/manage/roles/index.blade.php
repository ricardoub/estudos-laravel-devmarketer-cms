@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Roles</h1>
      </div>
      <div class="column">
        <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
      </div>
    </div>
    <hr class="m-t-0">
    <div class="columns is-multiline">
      @foreach ($roles as $role)
        <div class="column is-one-third">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h4 class="title">{{$role->display_name}}</h4>
                  <h5 class="subtitle"><em>{{$role->name}}</em></h5>
                  <p>{{$role->description}}</p>                  
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <a href="{{route('roles.show', $role->id)}}" class="button is-primary is-fullwidth">
                      Details
                    </a>
                    <a href="{{route('roles.edit', $role->id)}}" class="m-l-10 button is-light is-fullwidth">
                      Edit
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>
        </div>
          
      @endforeach
    </div>
  </div> <!-- .flex-container -->
@endsection
