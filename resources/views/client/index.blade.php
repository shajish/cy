<html>
<head>
    <title>Chautaro</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
    <cy-app></cy-app>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
