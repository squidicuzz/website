@extends('layout')

@section('content')
<div class="three centered columns">
    <p><img id="logo" src="/assets/img/drawing_1.svg"></p>
</div>
<div class="twelve columns" id="intro">
    <h2>Error</h2>

    <p>Your application was rejected. The errors were:</p>
    <ul>
        @foreach($messages->all('<li>:message</li>') as $message)
            {{ $message }}
        @endforeach
    </ul>

    <div class="medium metro rounded btn primary">
        <a href="/">Try again</a>
    </div>
</div>
@stop
