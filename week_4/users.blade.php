<!DOCTYPE html>
<html>
<title>USERS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w3-container">

 <table class="w3-table-all">
                <tr class="w3-red">
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td><a href="edit/{{$user->id}}"><button>Edit</button></a></td>
                        <td><a href="delete/{{$user->id}}"><button>Delete</button></a></td>
                    </tr>
                @endforeach

                
 </table> <br>
</div>

<a href="/register">
    <button> Go to register </button>
</a>

</body>
</html>