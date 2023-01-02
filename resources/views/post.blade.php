@extends("layout")

@section("body")
    <div id="commentSection">
        @forelse($comments as $comment)
            <h5>{{ $comment->author }}</h5>
            <p>{{ $comment->comment }}</p>
        @empty
        @endforelse
    </div>

    <input type="hidden" name="id" id="id" value="{{ $post->id }}">
    <input type="text" name="new-author" placeholder="Author" id="new-author" size="6">
    <input type="text" name="new-comment" placeholder="Comment" id="new-comment">
    
    <button class="btn btn-primary" name="add" id="addCommentButton" value="yba">Add New Comment</button>

    <br>
    <br>
    <a href="/" class="btn btn-primary">Home Page</a>

    <script>
        document.getElementById("addCommentButton").addEventListener("click", function(){
            const newComment = document.getElementById("new-comment").value;
            const newAuthor = document.getElementById("new-author").value;
            const id = document.getElementById("id").value;
            fetch("http://localhost:8000/api/comments", {
                method:"POST", 
                headers: {
                'Content-Type': 'application/json'},
                body: JSON.stringify({
                    newComment:newComment,
                    newAuthor:newAuthor,
                    id:id
                })
            }).then((response) => response.json())
                .then((data) => {
                    const comment = `<h5>${data.newAuthor}</h5><p>${data.newComment}</p>`;
                    document.getElementById("commentSection").innerHTML += comment;
                    console.log('Success:', data);
                    document.getElementById("new-comment").value = "";
                    document.getElementById("new-author").value = "";
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        })
        
    </script>   

@endsection