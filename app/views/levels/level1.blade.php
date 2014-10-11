@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3><i class="fa fa-user"></i>Welcome to our new admin panel.</h3>
                </div>
                <div class="box-content">
                    Please log in to continue:
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box-content">
                {{ Form::open(array('url' => URL::current(), 'method'=>'get' )) }}
                    Username: {{ Form::text('username', null, array('name'=>'username')) }}
                    Password: {{ Form::password('password', null, array('name'=>'password')) }}
                    {{ Form::submit('Login!', array('class' => 'btn btn-success', 'name'=>'submit')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            var username = String.fromCharCode(97, 100, 109, 105, 110);
            var password = String.fromCharCode(99, 108, 105, 101, 110, 116, 83, 105, 100, 101, 83, 101, 99, 117, 114, 105, 116, 121);

            $('input[name="submit"]').click(function(e) {

                e.preventDefault();

                if($('input[name="username"]').val() == username && $('input[name="password"]').val() == password) {


                    document.cookie="level1=586cbf6adf67d60ed200e4839d6c3de9f25536ad";

                    window.location="{{ URL::route('chasenet.level.two') }}";

                } else {
                    alert('Incorrect credentials.');
                }
            });
        });
    </script>

@stop

