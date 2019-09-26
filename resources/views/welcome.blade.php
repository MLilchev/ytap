<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('js/refreshAt.js') }}"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <?php
        foreach ($links as $link) {
            echo '
            <div class="row">
                <div class="col-sm-8">
                    <div class="title"><a href=/show/'.$link['id'].'>'.$link['title'].'</a></div>
                    <div class="description">'.$link['description'].'</div>
                </div>
                <div class="col-sm-4">
                    <div class="image">
                        <img src="https://img.youtube.com/vi/'.(getYoutubeIdFromUrl($link['url'])).'/hqdefault.jpg"/>
                    </div>
                </div>
            </div>
            ';
        }
            ?>
        <table width="100%" cellspacing="0" cellpadding="5" border="0" class="application">
            <tr>
            <th align="left">Title</th>
            <th align="left">Link</th>
            <th align="left">Description</th>
            </tr>  
        <?php
        foreach ($links as $link) {
            echo '
                <tr>
                    <td>'.$link['title'].'</td>
                    <td>'.$link['url'].'</td>
                    <td>'.$link['description'].'</td>
                </tr> 
            ';
        }
        ?>
        </table>
        <div class="links">
            @foreach ($links as $link)
                <a href="{{ $link->url }}">{{ $link->title }}</a>
            @endforeach
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script>$( document ).ready(function() {refreshAt(17, 18, 0)});</script>
    </body>
</html>
