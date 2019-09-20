@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container-fluid">
<table class="table table-hover">
    <tr >
        <th>Title</th>
        <th>Content</th>
        <th>Likes</th>
        <th>Like</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td> 
            <td>{{$post->content}}</td>
            <td>{{$post->likes}}</td>
            <td><a href="posts/{{$post->id}}/like">
                <button name ="likes" class="btn btn-primary"> Like </button></a></td>
            <td><a href="edit/{{$post->id}}">
                <button class="btn btn-success"> Edit </button></a></td>
            <td><form action="delete/{{$post->id}}" method="delete">
            <button class="btn btn-danger"> Delete </button>
             </form></td>
        </tr>
            



        
    @endforeach
</table><br>
<a href="/createPost">
                <button class="btn btn-info"> Kreiraj </button></a></div>