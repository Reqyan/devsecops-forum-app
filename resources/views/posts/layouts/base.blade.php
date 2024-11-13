<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content=@yield('title')>
    <meta name="description" content="The Ask is a bootstrap design help desk, support forum website template coded and designed with bootstrap Design, Bootstrap, HTML5 and CSS. Ask ideal for wiki sites, knowledge base sites, support forum sites">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, js, Forum, webstagram, webdesign, website, web, webdesigner, webdevelopment">
    <meta name="robots" content="index, nofollow">
    <meta name="language" content="English">


    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('css/editor.css') }}" rel="stylesheet" type="text/css"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

</head>

<body>
    @include('posts.layouts.header')
    @include('posts.layouts.navbar')
    @include('posts.layouts.welcome')

    <!-- ======content section/body=====-->
    @yield('content')

    @include('posts.layouts.footer')



    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script> -->
    @yield('js')
</body>



</html>