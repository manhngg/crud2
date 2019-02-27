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
</p>
@endforeach