<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 9 Vue.js Login</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <login></login>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
