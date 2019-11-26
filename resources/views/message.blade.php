<!DOCTYPE html>
<html>
    <head>
        <title>SImple Chat</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body style="background-color: #F3F3F3">
        <div class="col-md-3 col-sm-offset-4 frame" style="margin-top: 100px">
            <ul>
              <li style="width:100%">
                        <div class="msj macro">
                        <div class="avatar"><img class="img-circle" style="width:100%;" src="{{asset('img/1.jpg')}}" /></div>
                            <div class="text text-l">
                                <p>text +</p>
                                <p><small>+date+</small></p>
                            </div>
                        </div>
                  </li>
                  <li style="width:100%;">
                        <div class="msj-rta macro">
                            <div class="text text-r">
                                <p>text+</p>
                                <p><small>+date+</small></p>
                            </div>
                        <div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="{{asset('img/'.Auth::user()->picture)}}"  /></div>
                  </li>
            </ul>
            <div>
                <div class="msj-rta macro" style="margin:auto;margin-bottom: 10px">
                    <div class="text text-r" style="background:whitesmoke !important">
                        <input class="mytext" placeholder="Type a message"/>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
