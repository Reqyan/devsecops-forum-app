<style>
    .navbar-menu-left-side239 .fa:after {
        content: "|";
        color: #2f3239;
        float: left;
        margin: 0px 10px;
    }
</style>
<!--======== Navbar =======-->
{{-- <div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="navbar-menu-left-side239">
          <ul>
            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</a></li>
            <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>Support</a></li>
            <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i>Login Area</a></li>
            <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="navbar-serch-right-side">
          <form class="navbar-form" role="search">
            <div class="input-group add-on">
              <input class="form-control form-control222" placeholder="Search" id="srch-term" type="text">
              <div class="input-group-btn">
                <button class="btn btn-default btn-default2913" type="button"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-menu-left-side239">
                    <ul>
                        <!-- Cek apakah pengguna sudah login -->
                        @if (Auth::check())
                            <!-- Jika sudah login, tampilkan nama pengguna dan tautan ke profil -->
                            <li><a href="/profile"><i class="fa fa-user"
                                        aria-hidden="true"></i>{{ Auth::user()->name }}</a></li>
                            <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                        @else
                            <!-- Jika belum login, tampilkan tautan login -->
                            <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i>Login Area</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ==========header mega navbar=======-->
<div class="top-menu-bottom932">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle
                        navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#"><img src="/image/logo.png" alt="Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"> </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/create-post">Ask Question</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
