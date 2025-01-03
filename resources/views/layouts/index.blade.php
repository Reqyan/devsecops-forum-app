<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filkomfess</title>
    @include('partials.head')
</head>

<body>
    @include('partials.navbar')
    <!--======= welcome section on top background=====-->
    <section class="welcome-part-one">
        <div class="container">
            <div class="welcome-demop102 text-center">
                <h2>Welcome to Ask me, Awesome Questions & Answer Template</h2>
                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing
                    iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque
                    <br> habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur
                    vitae velit in neque dictum blandit
                </p>
                <div class="button0239-item">
                    <a href="#">
                        <button type="button" class="aboutus022">About Us</button>
                    </a>
                    <a href="#">
                        <button type="button" class="join92">Join Now</button>
                    </a>
                </div>
                <div class="form-style8292">
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-pencil-square"></i></span>
                        <input type="text" class="form-control form-control8392"
                            placeholder="Ask any question and you be sure find your answer ?"> <span
                            class="input-group-addon"><a href="#">Ask Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    @include('partials.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha384-n4X8QpDwlNx36Un/H46IrT0Sgi8GUV6FA5hTLbmuzxGRZzLse8yU8H/8ImQeIpP+" crossorigin="anonymous">
    </script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/npm.js"></script>
</body>

</html>
