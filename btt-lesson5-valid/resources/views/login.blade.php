<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
    <form method="POST" action="{{route('loginSubmit')}}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h1>Bùi Thành Trung - Login</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="123456Abc">
                    @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Submit" name="btnSubmit" class="btn btn-primary">
            </div>
        </div>
    </form>
    </section>
</body>
</html>