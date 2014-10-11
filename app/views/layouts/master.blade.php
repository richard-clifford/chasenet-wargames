<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ChaseNET Wargames!</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/theme.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                {{ HTML::linkRoute('chasenet.home', 'ChaseNET Wargames!', '', ['class' => 'navbar-brand']) }}
            </div>
            <div class="navbar-collapse collapse">
                @if(!Session::get('logged_in'))
                    <form role="form" class="navbar-form navbar-right" method="post" action="{{ URL::route('chasenet.login') }}">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-success" type="submit">Sign in</button>
                    </form>
                @else
                    <div class="navbar-right">
                        <p class="header-text">Welcome, <strong>{{ HTML::linkRoute('chasenet.logout', Session::get('username')) }}</strong></p>
                    </div>
                @endif

                @section('menubar')
                @stop
            </div>
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
