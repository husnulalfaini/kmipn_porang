<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/asset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('public/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/asset/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/asset/dist/css/adminlte.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center text-success">
      <p class="h1"><b>LOGIN</b></p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan melakukan login</p>

      <form action="../../index3.html" method="post">
      <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text "><i class="far fa-user"></i></span>
                        </div>
                        <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                     </div>
                     <!-- /.input group -->
                  </div>
                  <div class="form-group">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <!-- /.input group -->
                  </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4 offset-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
       
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Reset Password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/asset/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
