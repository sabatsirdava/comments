@extends("layout")

@section("body")
<h3>Comments</h3>
    <div>
        @forelse($comments as $comment)
            <h5>{{ $comment->author }}</h5>
            <p>{{ $comment->comment }}</p>
            <form method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-danger btn-sm" name="delete" value="{{$comment['id']}}">
                        Delete
                    </button> 
                </div> 
            </form>
        @empty
            "no comments"
        @endforelse
    </div>


@endsection