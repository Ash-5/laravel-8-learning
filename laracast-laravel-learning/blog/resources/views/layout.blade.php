<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

<div style="margin: 20px">
    <form action="#" method="get">
        <input type="text" name="search" placeholder="Find Post" value="{{ request('search') }}">
    </form>
</div>

    @yield('content')

</body>
</html>

