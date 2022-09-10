@extends('backend.layout.auth_master')
@section('page_title','Register')

@section('content')
            {!! Form::open(['route'=>'register','method'=>'post']) !!}
            {!! Form::label('name', 'Enter Your Name'); !!}
            {!! Form::text('name',null,['class'=>'form-control form-control-sm']) !!}

            {!! Form::label('email', 'E-Mail Address'); !!}
            {!! Form::text('email',null,['class'=>'form-control form-control-sm']) !!}



            {!! Form::label('Password', 'Enter Your Password'); !!}
            {!! Form::password('password',['class'=>'form-control form-control-sm mb-2']) !!}

            {!! Form::label('password_confirmation', 'Retry Your Password'); !!}
            {!! Form::password('password_confirmation',['class'=>'form-control form-control-sm mb-2']) !!}

            {!! Form::button('Register',['class'=>'form-control form-control-sm mb-2 btn btn-info','type'=>'submit']) !!}

            {!! Form::close() !!}
            <p class="mt-2">Loginr Here?<a class="" href="{{ route('login') }}"> Login Here</a></p>
			
@endsection
