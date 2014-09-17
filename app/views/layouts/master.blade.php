<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChaseNET Wargames!</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/theme.css" />
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <form role="form" class="navbar-form navbar-right" method="post" action="{{ URL::route('chasenet.login') }}">
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-success" type="submit">Sign in</button>
          </form>
          {{ HTML::linkRoute('chasenet.home', 'ChaseNET Wargames!', '', ['class' => 'navbar-brand']) }}
        </div>
        @section('menubar')
        @stop
      </div>
    </div>
    <div id="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>