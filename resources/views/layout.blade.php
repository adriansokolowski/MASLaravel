<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
    <header>
        <div id="top">
            <div class="wrapper">
                <div id="logo">
                    <a href="./index.php" class="lime">Logo<span>.com</span></a>
                </div>
                <div class="nav-items">
                    <a href="/login" class="lime">Log In</a> |
                    <a href="/register">Sign Up</a>
                </div>
            </div>
        </div>
        <nav id="menu">
            <div class="wrapper">
                <div class="nav-items">
                    <a href="/members">Home</a> |
                    <a href="/members">Movies</a> |
                    <a href="/members">TV Shows</a> |
                    <a href="/members">Actors</a> |
                    <a href="/members">Directors</a> |
                    <a href="/members">Members</a> |
                    <a href="/profile">Profile</a> 
                </div>
                <div id="search">
                    <form action="">
                        <input type="text" placeholder="Title, actor, director ...">
                        <input type="submit" value="Search">
                        </input>
                    </form>
                </div>

            </div>
        </nav>
    </header>
        @yield('content')
    </body>
</html>
