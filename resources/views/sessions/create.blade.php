@extends('layouts.master')

@section('content')
    <h1>Sign In</h1>

    <form action="/login" method="post">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

     <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>

       <div class="form-group">
           <button type="submit" class="btn btn-primary">Sign In</button>
       </div>

    </form>

    @include ('layouts.errors')

@endsection
