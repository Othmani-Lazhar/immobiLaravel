@extends('adminlte::master')


@section('adminlte_css')
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
  @yield('css')
@stop
@section('body_class', 'login-page')

@section('body')
  <div class="register-box col-9">


    <div class="register-box-body">

      {!!Form::open(array('url' => '/register', 'method'=>'POST', 'files' => true))!!}

        {{ csrf_field() }}

      <div class="form-group">

        <img class="profile-user-img img-responsive img-circle" width="200" height="200" id="image" name="image" src="{{asset('img/avatar5.png')}}" alt="User profile picture">

        <input type="file" id="files"   name="img" width="10" height="10">
      </div>
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Full name">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="email" class="form-control"  name="phone"  placeholder="Phone">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control"  name="email"  placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control"  name="password"  placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control"  name="passwordret"  placeholder="Retype password">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">

                <input type="checkbox"  name="check" > I agree to the <a href="#">terms</a>

            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      {!!Form::close()!!}

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
          Google+</a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
@stop

@section('adminlte_js')
  <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });



  </script>

  <script>
    document.getElementById("files").onchange = function () {
      var reader = new FileReader();

      reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
      };

      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
    };
  </script>
  @yield('js')
@stop