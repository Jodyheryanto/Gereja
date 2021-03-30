<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:13:02 GMT -->

<head>
    <title>Login - Admin GPIB Sejahtera Jakarta</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Favicons -->
    <link href="/assetsU/img/icon.png" rel="icon">
    <link href="/assetsU/img/icon.png" rel="apple-touch-icon">
    <!-- <link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css"> -->
    <link href="/vendor/lightadmin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/vendor/lightadmin/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/vendor/lightadmin/css/maince5a.css?version=4.4.1" rel="stylesheet">
</head>

<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w"><a href="index-2.html"><a href="{{ route('home') }}" class="scrollto"><img src="/assetsU/img/logo.png" alt="" style="width: 250px;"></a></div>
            <h4 class="auth-header">Login Form</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                <label for="">Email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w"><button class="btn btn-primary">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
