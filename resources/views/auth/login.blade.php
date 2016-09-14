<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Lela Services">
  <meta name="author" content="Tuan Bui">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lela</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{url('public/lelatemplate/asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{url('public/lelatemplate/asset/css/plugins/font-awesome.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{url('public/lelatemplate/asset/css/plugins/simple-line-icons.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{url('public/lelatemplate/asset/css/plugins/animate.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{url('public/lelatemplate/asset/css/plugins/icheck/skins/flat/aero.css')}}"/>
  <link href="{{url('public/lelatemplate/asset/css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{url('public/lelatemplate/asset/img/logomi.png')}}">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

         <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Lela</h1>
                  <p class="element-name">Login</p>
                 
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text {{ $errors->has('email') ? ' has-error' : '' }} " style="margin-top:40px !important;">
                    <input type="email" class="form-text" name="email" value="{{ old('email')}}" required >
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text {{ $errors->has('password') ? ' has-error' : '' }}" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" required>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="{{ url('/password/reset') }}">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="{{url('public/lelatemplate/asset/js/jquery.min.js')}}"></script>
      <script src="{{url('public/lelatemplate/asset/js/jquery.ui.min.js')}}"></script>
      <script src="{{url('public/lelatemplate/asset/js/bootstrap.min.js')}}"></script>

      <script src="{{url('public/lelatemplate/asset/js/plugins/moment.min.js')}}"></script>
      <script src="{{url('public/lelatemplate/asset/js/plugins/icheck.min.js')}}"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>