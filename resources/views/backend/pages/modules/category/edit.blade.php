@extends('backend.layout.master')
@section('page_title','Edit catagory')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Catagory</h4>
            </div>
            
            <div class="card-body">
                {!! Form::model($category,['route'=>['category.update',$category->id], 'method'=>'put']) !!}
                @include('backend.pages.modules.category.form')
                {!! Form::button('Update Category',['class'=>'btn btn-warning my-2 btn-sm','type'=>'submit']) !!}

                {!! Form::close() !!}
                <a href="{{ route('category.index') }}" class="btn btn-success btn-sm">Back</a>
            </div>
            
        </div>
    </div>
</div>
@endsection