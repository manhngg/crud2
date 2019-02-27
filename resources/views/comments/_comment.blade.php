@foreach ($article->comments as $comment)
<p>
  <strong>Commenter:</strong>
  {{ $comment->commenter }}
</p>
 
<p>
  <strong>Comment:</strong>
  {{ $comment->body }}
</p>
 
<p> 
  <a data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{ route('article_comments_path', $article->id, $comment->id) }}">Destroy Comment</a>
  <form action="{{ route('article_comment_path',[$comment->id,$article->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy Comment" />
   </form>
</p>
@endforeach