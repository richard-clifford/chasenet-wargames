@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome, Welcome!</h1>
            <p>Welcome to our 10 levels of wargames where you can test your web application penetration testing skills based on the challenges that we present to you.</p>
            <p>As mentioned there are 10 levels, each getting increasingly more difficult.</p>
            <p>Rules:
                <ul>
                    <li>Enter your name at the top and click go to start the games</li>
                    <li>There is a "help" button on each game to give you a hint, however, this comes at a price of 15 minutes added on per hint clicked to your total time taken which will be presented on the {{ HTML::linkRoute('chasenet.scoreboard', 'Scoreboard') }}.</li>
                    <li>Each player or group of players must work amongst themselves with no outside help (of course the internet is fine - but no interaction with other players)</li>
                    <li>Top 5 competators to complete the challenges the fastest will be rewarded with a soda-pop </li>
                    <li>Have fun!</li>
                </ul>
            </p>
            <p>Start here: {{ HTML::linkRoute('chasenet.level.one', 'Level One') }}</p>
            <hr />
            <p>
                Need help? - Visit the ChaseNET IRC: <strong>irc.darkscience.net:+6697 (SSL Only) #ChaseNET</strong>
            </p>
        </div>
    </div>

@stop