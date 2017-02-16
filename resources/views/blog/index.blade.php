{{ Session::get('message') }}

<h1>my first blog</h1>
<div class="content">
	@foreach($blogs as $blog)
	<h2><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h2>
		{{ date('F d, Y',strtotime($blog->created_at)) }}
	<p>{{ $blog->description }}</p>
	<a href="/blog/{{ $blog->id }}/edit">edit this post</a>
	<form class="" action="/blog/{{ $blog->id }}"
	method="post">
	<input type="hidden" name="_method"
	value="delete">
	<input type="hidden" name="_token" value="{{
	csrf_token() }}">
	<input type="submit" name="name"
	value="delete">
	</form>
@endforeach
</div>
{!! $blogs->links() !!}