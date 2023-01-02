@extends("layout")

@section("body")
    <div>
        @foreach ($posts as $post)
            <h2>
                <a href="{{ route('post', ['title'=>$post->title, 'id'=>$post->id])}}">
                    {{ $post->title }}
                </a>
            </h2>

        @endforeach
    </div>

@endsection