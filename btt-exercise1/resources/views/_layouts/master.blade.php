<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaVy4JwqLDIrZUI/4hqeQieOmAZNXBeQyjO21dadnwR+8ZaIJVT8EE2iyI6I0V8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VD/ismYTF4hNIPjVp/Zjgvyol6VFrRkX/vR+Vc4JQkC+hvqC2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUgZvbkm6XF6gxjEnImuGrJXVbNuzT9qBBavbLwCsOGaByfZ0o0Tt0e5qrupty" crossorigin="anonymous"></script>
</head>
@include('_layouts.header')
<body>
    @include('_layouts.navbar')

    @yield('content')

    @include('_layouts.sidebar')

    @include('_layouts.footer')
</body>
</html>