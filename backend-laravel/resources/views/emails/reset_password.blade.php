@extends('beautymail::templates.sunny')

@section('content')

@include ('beautymail::templates.sunny.heading' , [
'heading' =>'Change Password',
'level' => 'h1',
])

@include('beautymail::templates.sunny.contentStart')
<div style="color:black; text-align:center">
    <p>
        If you lost your password, use the link below to get started
    </p>

</div>
@include('beautymail::templates.sunny.contentEnd')
<div>

    @include('beautymail::templates.sunny.button', [
    'title' => 'Reset your Password',
    'link' => $url
    ])
</div>

@include('beautymail::templates.sunny.contentStart')
<div style="color:gray; padding: 5%; font-size: 80%; text-align: center">
    <p>
        if you didn't request or forgot your password you can ignore this email!
        Only person with access to your email can reset your account password.
    </p>

</div>
@stop