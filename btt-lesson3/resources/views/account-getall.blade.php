<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dữ liệu tài khoản</title>
</head>
<body>
<h1>Account-getAll</h1>
    <hr/>
    <table border="1px" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->UserName}}</td>
                    <td>{{$item->Password}}</td>
                    <td>{{$item->FullName}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>