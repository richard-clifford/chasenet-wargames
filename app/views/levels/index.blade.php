@extends('layouts.master')

@section('content')
    <ul>
        <li>{{ HTML::linkRoute('chasenet.level.one', 'Level 1') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.two', 'Level 2') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.three', 'Level 3') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.four', 'Level 4') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.five', 'Level 5') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.six', 'Level 6') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.seven', 'Level 7') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.eight', 'Level 8') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.nine', 'Level 9') }}</li>
        <li>{{ HTML::linkRoute('chasenet.level.ten', 'Level 10') }}</li>
    </ul>
@stop