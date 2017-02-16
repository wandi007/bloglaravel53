<h2>Edit Article Post</h2>

<form action="/blog/{{ $blog->id }}"method="post">
	<input type="text"name="title"value="{{ $blog->title }}">
	{{ ($errors->has('title')) ? $errors->first('title') : '' }}
	<br>
	<textarea name="description"rows="8"cols="40"placeholder="
	this is description"></textarea><br>
	{{ ($errors->has('description')) ? $errors->first('description') : '' }}<br>
	<input type="hidden"name="_method"value="put">
	<input type="hidden"name="_token"value="{{ csrf_token() }}">
	<input type="submit"name="name"value="edit">
</form>