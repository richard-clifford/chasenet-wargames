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
                </table>
            </div>
        </div>
    </div>
@stop