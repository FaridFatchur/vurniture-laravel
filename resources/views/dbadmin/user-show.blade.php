<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user-show</title>
</head>
<body>
    <table class="list" id="storeList">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <!-- <th>Image</th> -->
                <th>Email</th>
                <th>Password</th>
                <th>Admin</th>
                <th>Act</th>
            </tr>
            @foreach($dataUser as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['usn']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['pass']}}</td>
                <td>{{$item['isadmin']}}</td>
                <td><button><a href="{{route('users.edit', $item['id'])}}">edit</a></button>
                <form method="POST" action="{{route('users.destroy', $item['id'])}}">
                    @csrf
                    @method('delete')
                    <button>Del</button></form>
                </td>
            </tr>
            @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
</body>
</html>