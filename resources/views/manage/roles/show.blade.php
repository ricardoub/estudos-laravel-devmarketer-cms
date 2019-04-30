@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">
          {{$role->display_name}}
        </h1>
        <h3 class="subtitle">( {{$role->name}} )</h3>
        <p>{{$role->description}}</p>
      </div>
      <div class="column">
        <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-plus m-r-10"></i> Edit Role</a>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h2 class="title">Permissions:</h2>
                <hr class="m-t-0">
                <ul>
                  @foreach ($role->permissions as $r)
                    <div class="columns">
                      <div class="column is-one-third">{{$r->display_name}}</div>
                      <div class="column is-two-thirds">{{$r->description}}</div>                    
                    </div>
                  @endforeach
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection