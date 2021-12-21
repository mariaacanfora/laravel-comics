<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    @include("partials.head_links_scripts")
</head>
<body>
    @include('partials.the_header')

    <main>
        @include('partials.the_hero')
        @yield('main_content')
    </main>

    @include('partials.the_footer')
</body>
</html>