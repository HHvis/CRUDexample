<!DOCTYPE html>
<html>

<head>
    <title>NFQ</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>    
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>

<a href="/">
    <img src="/images/logonfq.png" alt="NFQ_logo" width="70" height="70" style="vertical-align:middle;margin:0px 20px">
</a>

    @section('sidebar')
    @show

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
