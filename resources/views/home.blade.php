@extends('layouts.app')

@section('content')

  <style>
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
{{-- </head>
<body> --}}
  <div class="flex-center position-ref full-height">
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
{{-- </body> --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
