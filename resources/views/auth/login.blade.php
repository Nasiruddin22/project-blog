@extends('backend.layout.auth_master')
@section('page_title','login')

@section('content')
            {!! Form::open(['route'=>'login','method'=>'post']) !!}
            {!! Form::label('email', 'E-Mail Address'); !!}
            {!! Form::text('email',null,['class'=>'form-control form-control-sm']) !!}

            {!! Form::label('Password', 'Enter Your Password'); !!}
            {!! Form::password('password',['class'=>'form-control form-control-sm mb-2']) !!}

            {!! Form::submit('Login',['class'=>'form-control form-control-sm mb-2 btn btn-info']); !!}

            {!! Form::close() !!}
            <p class="mt-2">Register Here?<a class="" href="{{ route('register') }}"> Register Here</a></p>
@endsection
