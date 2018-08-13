<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Test Server is Here!
                </div>

                <div class="googlephoto">
                    <img style="width:800px" src="https://lh3.googleusercontent.com/gu03i6wyoWmfzwocnt87vR9BHmPmnArHFmNdbJ1oL2-BhkOyaGCt7qp-T-kOenKzk_-dXVAvjn6atLyYRQpVadZziiReI5MSbLiBZzDctH04x_7wAaXvnp-j1r--A6X35iLKA9fC4lcEozCnKuT9DZVICDEv0uoYLUf-vMVGvj-X90LeRUZ_DhcssofKUAEuMfgYKiAUGlDcL6CquFKBaiwp_p6i3JXzVLBBHFfa66TxzmWBNhd0aRisVrfms58BocwWR_cjAsza1sFvvStRsWLOLIA253HQyJoKaaiPQNAkBccCipPHxanLbpmwJpkga0MCi1ZsbrxEYKVwAjS_da4_IcS_DYPM4QDsIy_zDIvu6fYkyke8YN4igMGKEgY8hhypzHjjmzwv15seA35JYcZrXfSpw7rxwGTt6ZVHhtFrVqdXW-qkKxmuS2fyt3J6v4b_RNcICn-8uAVRO7Os7_7O0AudTWTmy8z44adwfI5VTOVPtxwoDdbzfwxvCWsCXYpaViSQGE8CBJFi2XFqaRLB_e2TY57LbrMMD1cfrheW0-1sYjGV3dyxdykIoNFl9oo4cNX85sG49HqPE1kYgZRipZrV6xn9ZWPGiQIq=w2348-h1760-no">
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
