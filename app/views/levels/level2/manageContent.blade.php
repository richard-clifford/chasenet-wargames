@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3><i class="fa fa-cog"></i>Update Content</h3>
                    </div>
                    <div class="box-content">
                        {{ Form::open(array('role'=>'form')) }}
                            <div class="form-group">
                                <label for="page-title">Page Title:</label>
                                {{ Form::text('page-title', $page_title, array('class'=>'form-group', 'id'=> 'page-title', 'placeholder'=>'Page Title')) }}
                            </div>
                            <div class="form-group">
                                <label for="page-title">Page Content:</label>
                                {{ Form::textarea('page-content', $page_content, array('placeholder'=>'The Page content goes here', 'class'=>'form-control')) }}
                            </div>
                        {{ Form::submit('Submit', array('class' => 'btn btn-success', 'name'=>'submit')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop