<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="yDaczUYLpAmBtumcBw_f6RCQe8QY5X23_x7Ru9Z4LyA" />
    <meta name="description" content="English Pour Tout Le Monde">
    <meta name="keywords" content="volunteer,english,Paris,teaching,refugees,homeless,migrants,asylum" translate="yes">
    <meta name="author" content="English Pour Tout Le Monde">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{--    <link rel="stylesheet" type="text/css" href="css/main.css">--}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet"/>



    <!-- Styles -->
    <link href="{{ asset('css/newsstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="{{ asset('css/mobilestyle.css') }}">

    <title>@yield('title')</title>

    <script src='https://cdn.tiny.cloud/1/4fq6p6frhqgs06ikee1ufp208mud2qcakkfevk8gmyccy0yq/tinymce/5/tinymce.min.js'
            referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '.mytextarea',
            invalid_elements: 'p,div,br',
            force_br_newlines: false,
            force_p_newlines: false,
            menubar: false,
        });
    </script>

    <script src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
    <script>window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"0cef73766ed443d90ab5f29d2","lid":"ab0f69f92b","uniqueMethods":true}) })</script>

    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
</head>
<body>

<header>
@include('partials.nav')

</header>

    @yield('content')




@include('partials.footer')
</body>
</html>
