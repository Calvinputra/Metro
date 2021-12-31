@extends('beautymail::templates.sunny')

@section('content')

@include ('beautymail::templates.sunny.heading' , [
'heading' =>'Verify your email to finish signing up for Metro Jaya',
'level' => 'h1',
])

@include('beautymail::templates.sunny.contentStart')
<div style="background-color: #841C26; color:white; padding: 5%;">
    <p class="text-white">
        Hello Jason Renata,
    </p>
    <p>Thank you for choosing Metro Jaya!<br>One more step to shop with us, please confirm
        your email by clicking on the button below</p>

</div>
@include('beautymail::templates.sunny.contentEnd')
<div style="background-color: #841C26;">

    @include('beautymail::templates.sunny.button', [
    'title' => 'Verify email',
    'link' => $url
    ])
</div>

@stop