@extends("layout")

@section("body")
        <center><h1 style="background-image: linear-gradient(AliceBlue, MediumPurple); font-family:cursive;">ADMIN PAGE</h1></center>

    <div>
        @foreach ($posts as $post)
            <h2>
                <a href="{{ route('comment', ['title'=>$post->title, 'id'=>$post->id])}}">
                    {{ $post->title }}
                </a>
                <form method="post">
                    @csrf
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-danger btn-sm" name="delete" value="{{$post['id']}}">
                            Delete
                        </button> 
                    </div> 
                </form>
            </h2>
        @endforeach
        <br>
        <form method="post">
            @csrf
            <input type="text" name="new_post" placeholder="Post">
            <button class="btn btn-primary btn-sm" name="add" value="yba">
                Add New Post
            </button>
        </form>
        
    </div>
@endsection