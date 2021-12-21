@extends('beautymail::templates.sunny')

@section('content')

@include ('beautymail::templates.sunny.heading' , [
'heading' =>'Verify your email to finish signing up for Metro Jaya',
'level' => 'h1',
])

@include('beautymail::templates.sunny.contentStart')
<p>
    Hello Jason Renata,
</p>
<p>Thank you for choosing Metro Jaya!<br>One more step to shop with us, please confirm
    your email by clicking on the button below</p>

@include('beautymail::templates.sunny.contentEnd')

@include('beautymail::templates.sunny.button', [
'title' => 'Verify email',
'link' => $url
])

@stop