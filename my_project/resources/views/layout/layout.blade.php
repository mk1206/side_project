<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/common.css">
    <title>@yield('title', '짭든어택')</title>
</head>
<body style="width: 100%">
    @if (!Str::contains(request()->url(), 'login') && !Str::contains(request()->url(), 'regist'))
    @include('layout.header')
    @endif

    @yield('main')

    <script src="../js/common.js"></script>
</body>
</html>