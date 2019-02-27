@extends('layouts.application')
@section('content')
<h1>Listing Articles</h1>
<a href="{{ route('new_article_path') }}">New article</a>
<table class="modal-footer">
  <tr>
    <th>Title</th>
    <th>Text</th>
    <th colspan="3"></th>
  </tr>
 
  @foreach ($articles as $article)
    <tr>
      <td>{{ $article->title }}</td>
      <td>{{ $article->text }}</td>
      <td><a href="{{ route('article_path',$article->id)}}">Show</a></td>
      <td><a href="{{ route('edit_article_path',$article->id)}}">Edit</a></td>
      <td>
        <a data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{ route('article_path', $article->id)}}" class="delete">Destroy</a>
        <!-- <form action="{{ route('article_path', $article->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy" />
        </form> -->
      </td> 
    </tr>
  @endforeach
</table>
<button type="" class="continue"></button>
<script>
  $('.modal-footer').on('click', '.delete', function() {
        var article_id = $(this).data("article_id");
        var id = $(this).data("id");
        $.ajax(
        {
            url: "/articles/"+article_id+"/comments/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
              "article_id": article_id,
                "id": id,
                "_method": 'DELETE',
            },
            success: function ()
            {
                console.log("it Work");
            }
        });

        console.log("It failed");
    });
</script>
@endsection