<!-- file: resources/views/html101.blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - @yield('title')</title>
    <link rel = "stylesheet" href="css/bootstrap.css">
    <style>
        body {
              font-family: "Mitr", sans-serif;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class = "container mt-4">
        <h1>File Default</h1>
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
