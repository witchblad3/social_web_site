<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{env('app_name')}}</title>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}"/>

    {{-- bootstrap 5.1.3--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    {{--google fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>

    {{--font awesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    {{--bootstrap icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>

    {{--profile page--}}
    <link rel="stylesheet" type="text/css" href="{{asset("/css/style.css")}}"/>

</head>
<body style="position: relative;width: 100%;height: 100%;">
<div id="app">
    <main-component></main-component>
</div>


{{--jquery--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

{{--main app.js--}}
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
