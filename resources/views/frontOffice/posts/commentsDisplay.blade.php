@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->firstName }} {{ $comment->user->lastName }}</</strong> <br>
        <small> published at : {{$comment->created_at->format('d M Y')}} </small>
        <p>{{ $comment->body }}</p>
        @if(Auth::check())
                        @if (Auth::user()->id == $post->user||Auth::user()->id == $comment->user_id)
                        <form action="{{ route('comments.destroy',$comment->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

        <button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
    </div>
    </form>@endif
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('frontOffice.posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
    @endif
@endforeach
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
