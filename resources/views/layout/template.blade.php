<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>BookStore</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap
/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/components.css') }}" />
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>