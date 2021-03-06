@extends ('layouts.master')

@section ('content')
  <h1>Publish a Post</h1>
  <hr>
   <form method="post" action="/posts">
    {{ csrf_field() }}

      @include ('layouts.errors')

      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" />
      </div>

      <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" type="body" class="form-control" id="body">

        </textarea>
      </div>

      <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection