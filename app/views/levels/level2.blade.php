@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3><i class="fa fa-user"></i>Manage Users</h3>
                </div>
                <div class="box-content">
                    <ul>
                        <li>{{ HTML::linkRoute('chasenet.level.two.manage.users', 'Manage users') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3><i class="fa fa-user"></i>Manage Content</h3>
                </div>
                <div class="box-content">
                    <ul>
                        <li>{{ HTML::linkRoute('chasenet.level.two.manage.content', 'Manage content') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

