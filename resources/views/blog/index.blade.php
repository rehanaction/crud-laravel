All Bloglist
<br/>


@foreach($Blogs as $blog)
      <p><strong><h1> {!! $blog->title !!} </p></strong></h1>
      <p> {!! $blog->subject !!} </p>
      <hr>
@endforeach
