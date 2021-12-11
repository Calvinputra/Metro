@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello '.$name.'!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Thank you for joining with us!<br>One more step to shop with us, <br>Please Verify your email with link below!</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Verify email',
        	'link' => $url
    ])

@stop