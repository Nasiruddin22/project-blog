@extends('backend.layout.master')
@section('page_title','Create catagory')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Crate New Catagory</h4>
            </div>
            
            <div class="card-body">
                {!! Form::open(['route'=>'category.store','method'=>'post']) !!}
               @include('backend.pages.modules.category.form')
                {!! Form::button('Create New Category',['class'=>'btn btn-success my-2 btn-sm','type'=>'submit']) !!}

                {!! Form::close() !!}

                <a href="{{ route('category.index') }}" class="btn btn-info btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection