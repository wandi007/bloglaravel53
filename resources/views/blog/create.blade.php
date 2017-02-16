<!-- @if(count($errors)>0)
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif -->

<h2>add new post</h2>
<form action="/blog"method="post">
	<input type="text"name="title">
	{{ ($errors->has('title')) ? $errors->first('title') : '' }}
	<br>
	<textarea name="description"rows="8"cols="40"placeholder="
	this is description"></textarea><br>
	{{ ($errors->has('description')) ? $errors->first('description') : '' }}<br>
	<input type="hidden"name="_token"value="{{ csrf_token() }}">
	<input type="submit"name="name"value="post">
</form>
