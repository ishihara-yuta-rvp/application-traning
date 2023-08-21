<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <!-- cssの呼び出し-->
    <link rel="stylesheet" href="{{ asset('/css/list.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/textBox.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/message.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <script type="module" src="{{ asset('/js/app.js') }}"></script>

    <title>WEBアプリケーション開発課題</title>
</head>

<body>

    <!-- Header Start -->
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <h1 class="title_001">
                @yield('title')
            </h1>
            <nav class="nav">
                <button class="nav__toggle" aria-expanded="false" type="button">
                    menu
                </button>
                <ul class="nav__wrapper">
                    <li class="nav__item"><a href="{{ route('comprehensive.work.index', ['employeeCode'=>session('code')]) }}">勤怠</a></li>
                    <li class="nav__item"><a href="/user">社員</a></li>
                </ul>
            </nav>
        </div>
    </header>

        <div class="container">
            @yield('content')
        </div>
</body>
<footer>
    <!-- 省略 -->
</footer>

</html>
