<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>AnimeOnline @yield('title')</title>
        <title>Laravel</title>

       
    
    </head>
    <body >
      <nav>
        
        <ul id="nav">
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Anime</a>
             <ul>
                <li><a href="">Anime</a></li>
                <li><a href="">Manga</a></li>
                <li><a href="">Nasz Sklep</a></li>
            </ul>
            </li>
            <li><a href="">Dołącz do nas</a>
            <ul>
                <li><a href="">Zaloguj Się</a></li>
                <li><a href="">Zarejestruj Się</a></li>
            </ul>
            </li>
        </ul>
        
      </nav>
      <div id="baner">
        @yield('header')
      </div>
      <main>
        @yield('content') <!-- Blok dla treści podstrony -->
    </main>

      <footer></footer>
    </body>
</html>
