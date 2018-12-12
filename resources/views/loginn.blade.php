<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="loginbox">
            <!-- Remove This Before You Start -->
            <img src="user.png" class="user">
            <h2 class="text">Log In Here</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                            <label for="provinsi" class="col-md-4 control-label">Provinsi</label>

                            <div class="col-md-6">
                                <input id="provinsi" type="provinsi" class="form-control" name="provinsi" value="{{ old('provinsi') }}" required>

                                @if ($errors->has('provinsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('provinsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
            <p id="lupa">Lupa Password ?</p>
            <p id="lupa">Hubungi kami</p>
            <p id="lupa">CP : 088888888888 </p>
        </div>
    </body>
</html>
