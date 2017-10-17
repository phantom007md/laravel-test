@extends ('layouts.master')

@section ('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong> {{ $comment->created_at->diffForHumans() }}</strong>: &nbsp;
                {{ $comment->body }}
            </li>
        @endforeach
    </ul>

    <hr>

    <div class="card-blok">

        @include ('layouts.errors')

        <form method="post" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea class="form-control" name="body" id="body" placeholder="your comment here!"></textarea>
            </div>

            <div class="form-group">
                 <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>
    </div>

@endsection