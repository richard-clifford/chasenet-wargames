@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>SCOREBOARD</h2>
                <table class="table" id="scoreboard-table">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Time</td>
                            <td>Penalties taken (in seconds)</td>
                            <td>Total Time inc. Penalties</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($arrUserInfo as $arrInfo)
                        <tr>
                            <td>{{{ $arrInfo['name'] }}}</td>
                            <td>{{{ $arrInfo['timeTaken'] }}}</td>
                            <td>{{{ $arrInfo['penalties'] }}}</td>
                            <td>{{{ $arrInfo['timeTaken'] + $arrInfo['penalties'] }}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop