@extends('layouts.application')
@section('content')
<h1>New article</h1>

<form action="{{ route('articles_path') }}" accept-charset="UTF-8" method="post">
	@csrf
	@if ($errors->any())
	<div id="error_explanation">
		<h2>
			{{ $errors->count() }} errors prohibited
			this article from being saved:
		</h2>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<p>
		<label for="article_title">Title</label><br>
    	<input type="text" name="title" id="article_title" />
	</p>

	<p>
		<label for="">Text</label><br>
    	<textarea name="text" id="article_text"></textarea>
	</p>

	<p>
		<input type="submit" name="commit" value="Create Article" data-disable-with="Create Article" />
	</p>

</form>

<a href="{{ route('articles_path') }}">Back</a>
@endsection