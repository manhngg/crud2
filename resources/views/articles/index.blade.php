@extends('layouts.application')
@section('content')
<h1>Listing Articles</h1>
<a href="{{ route('new_article_path') }}">New article</a>
<table>
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
        <a id="{{$article->id}}" data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{ route('article_path', $article->id)}}">Destroy</a>
        <form action="{{ route('article_path', $article->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Destroy" />
        </form>
      </td> 
    </tr>
  @endforeach
</table>

<div id="log"></div>

<script>
$( 'a[data-method="delete"]' ).click(function( event ) {
  event.preventDefault();
  
  var url = $(this).attr('href');
  var id = $(this).attr('id');

  $.ajax({
    url: url, 
    type: 'DELETE',
    dataType: "JSON",
    data: {
      "id": id,
    },
    success: function(result){
    $( "<div>" ).append( "default " + event.type + " prevented" + url ).appendTo( "#log" );
  }});
  return confirm('Are you sure?');
  // $( "<div>" ).append( "default " + event.type + " prevented" + url ).appendTo( "#log" );
});
</script>

@endsection