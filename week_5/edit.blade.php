




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container-fluid">

<form method="POST" action="{{route('updatepost',$post->id)}}">
    {{csrf_field()}}
    <label>Title</label> <br />
    <input class="form-control" type="text" name="title" value="{{$post->title}}"> <br />
    <label>Content</label> <br />
    <input class="form-control" type="text" name="content" value="{{$post->content}}"> <br />
    

    <button class="btn btn-success" type="submit"> Save </button>
</form>
</div>