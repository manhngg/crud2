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
    	<input type="text" value="{{ $article->title }}" name="article[title]" id="article_title" />
	</p>

	<p>
		<label for="">Text</label><br>
    	<textarea name="article[text]" id="article_text">{{ $article->text }}</textarea>
	</p>

	<p>
		<input type="submit" name="commit" value="Create/Update Article" data-disable-with="Create Article" />
	</p>

</form>