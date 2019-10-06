<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sambat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sambat
                </div> --}}

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
                <div class="topnav">
                  <a class="active" href="#beranda">Beranda </a>
                  <a href="#pesan">Pesan</a>
                  <a href="#profil">Profil</a>
                  <a href="#pengaturan">Pengaturan</a>

                  <form class="navbar-form navbar-right" role="search">
                    <div class="form-group input-group">
                      <input type="text" class="form-control" placeholder="Location">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                          <span class="glyphicon glyphicon-search"></span>
                        </button>
                      </span>
                    </div>
                  </form>
                    </div>

                    <div class="container text-center">
                      <div class="row">
                        <div class="col-sm-3 well">
                          <div class="well">
                            <p><a href="#">My Profile</a></p>
                            <img src="" class="img-circle" height="65" width="65" alt="Avatar">
                          </div>
                          </div>
                          <div class="col-sm-7">

                            <div class="row">
                              <div class="col-sm-12">
                                <div class="panel panel-default text-left">
                                  <div class="panel-body">
                                    <p contenteditable="true">Mari kita sambat tentang hari ini ...</p>
                                    <button type="button" class="btn btn-default btn-sm">
                                      <span class="glyphicon glyphicon-plus"></span> Bagikan
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="well">
                                 <p>Joh</p>
                                 <img src="" class="img-circle" height="55" width="55" alt="Avatar">
                                </div>
                              </div>
                              <div class="col-sm-9">
                                <div class="well">
                                  <p>Kalau salah yaudah bilang aja salah. Ngaku nggak buat lu terlihat buruk kok, dari pada ngeles cari-cari alasan buat semua pembelaan lo! </p>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-comment"></span> Comment
                                  </button>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-envelope"></span> Send Massage
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="well">
                                 <p>Bo</p>
                                 <img src="" class="img-circle" height="55" width="55" alt="Avatar">
                                </div>
                              </div>
                              <div class="col-sm-9">
                                <div class="well">
                                  <p>Percuma lo mau cari muka di depan gue juga gak bakal ngaruh.</p>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-comment"></span> Comment
                                  </button>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-envelope"></span> Send Massage
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="well">
                                 <p>Jan</p>
                                 <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                                </div>
                              </div>
                              <div class="col-sm-9">
                                <div class="well">
                                  <p>Lah lu emang siapa minta dispecialin ? Martabak manis ? </p>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-comment"></span> Comment
                                  </button>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-envelope"></span> Send Massage
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="well">
                                 <p>Anj</p>
                                 <img src="" class="img-circle" height="55" width="55" alt="Avatar">
                                </div>
                              </div>
                              <div class="col-sm-9">
                                <div class="well">
                                  <p>Ngaca dong, lu tu gak ada keren-kerennya tauk. Yang ada kamu tu berantakan banget gila. Mandi gak sih kamu tuh ? </p>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-comment"></span> Comment
                                  </button>
                                  <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-envelope"></span> Send Massage
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                                            
            </div>
        </div>
    </body>
</html>
