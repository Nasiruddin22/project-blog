@extends('backend.layout.master')
@section('page_title','Catagory Detais')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Catagory detais</h4>
            </div>
            
            <div class="card-body">
              <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $category->slug }}</td>
                </tr>
                <tr>
                    <th>Slug ID</th>
                    <td>{{ $category->slug_id }}</td>
                </tr>
                <tr>
                    <th>Slug ID</th>
                    <td>{{ $category->order_by }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $category->status ==1 ? 'Publice' : 'Unpublice' }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td>{{ $category->updated_at == $category->created_at ? 'Not Updated' :$category->created_at->toDayDateTimeString() }}</td>
                </tr>
              </table>
              <a href="{{ route('category.index') }}" class="btn btn-success btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection