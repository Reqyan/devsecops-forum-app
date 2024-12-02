<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="title" content="Ask online Form">
    <meta name="description"
        content="The Ask is a bootstrap design help desk, support forum website template coded and designed with bootstrap Design, Bootstrap, HTML5 and CSS. Ask ideal for wiki sites, knowledge base sites, support forum sites">
    <meta name="keywords"
        content="HTML, CSS, JavaScript,Bootstrap,js,Forum,webstagram ,webdesign ,website ,web ,webdesigner ,webdevelopment">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"
        integrity="sha384-HASH_VALUE_FOR_GOOGLE_FONTS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
        integrity="sha384-1cFuDpdO4oEmQRyHcUepDpxOkK8ZrpvMTx5vPSqMZ09XAnw1zV7Q1KgeRXbGtoRS" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/loginstyle.css">
    <link rel="stylesheet" href="/plugins/sweetalert2/sweetalert2.min.css">
    <script src="/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body>

    <script>
        @if (session()->has('success'))
            Swal.fire({
                title: 'Success',
                html: '{!! session('success') !!}',
                icon: 'success'
            })
        @endif
        @if (session()->has('error'))
            Swal.fire({
                title: 'Error!',
                html: '{!! session('error') !!}',
                icon: 'error'
            })
        @endif
        @if (session()->has('info'))
            Swal.fire({
                title: 'Info',
                html: '{!! session('info') !!}',
                icon: 'info'
            })
        @endif
        @if (isset($success))
            Swal.fire({
                title: 'Success',
                text: '{{ $success }}',
                icon: 'success'
            })
        @endif
        @if (isset($error))
            Swal.fire({
                title: 'Error!',
                text: '{{ $error }}',
                icon: 'error'
            })
        @endif
        @if ($errors->any())
            Swal.fire({
                title: 'Error!',
                html: '{!! implode('', $errors->all(':message<br>')) !!}',
                icon: 'error'
            })
        @endif
    </script>

    <div class="modal-wrap">

        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Log In</div>
                <div class="description">Hello there, Log In</div>
                <form method="post">
                    @csrf
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <div class="text-center">
                        <button type="submit" class="button" style="border: 0px;">LOG IN</button>
                        <a href="/register">
                            <div class="button">Create an account</div>
                        </a>
                    </div>
                </form>
            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" 
        integrity="sha384-zosEB8zRHEmC5Rwz4zIU3PvJbQ6WFQY30He5HVpIqzz0Y21adJ7npF6D5e8Qo2W2" 
        crossorigin="anonymous"></script>



</body>

</html>
