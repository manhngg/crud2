@extends('layouts.application')
@section('content')
<p>
  <strong>Title:</strong>
  {{ $article->title }}
</p>
 
<p>
  <strong>Text:</strong>
  {{ $article->text }}
</p>
 
<h2>Comments</h2>

@include('comments._comment')
 
<h2>Add a comment:</h2>
@include('comments._form')
 
<a href="{{ route('edit_article_path',$article->id)}}">Edit</a> |
<a href="{{ route('articles_path') }}">Back</a>
@endsection