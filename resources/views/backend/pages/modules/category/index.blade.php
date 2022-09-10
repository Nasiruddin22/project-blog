@extends('backend.layout.master')
@section('page_title','Catagory List')
@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
               <div class="row">
                <div class="col-6">
                    <h4>Catagory List</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('category.create') }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-plus"></i></a>
                </div>
               </div>
            </div>
            
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Catagory</th>
                            <th>slug</th>
                            <th>slug Id</th>
                            <th>Status</th>
                            <th>Order By</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $sl =1 @endphp
                        @foreach ($category as $category)
                       <tr>
                            <td class="alin-middle">{{ $sl++ }}</td>
                            <td class="alin-middle">{{ $category->name }}</td>
                            <td class="alin-middle">{{ $category->slug }}</td>
                            <td class="alin-middle">{{ $category->slug_id }}</td>
                            <td class="alin-middle">{{ $category->status ==1 ? 'Publice' : 'Unpublice' }}</td>
                            <td class="alin-middle">{{ $category->order_by }}</td>
                            <td class="alin-middle">
                                <p class="text-success">{{ $category->created_at->toDayDateTimeString()}}</p>
                                <p class="text-info">{{ $category->updated_at == $category->created_at ? 'Not Updated' :$category->created_at->toDayDateTimeString() }}</p>
                            </td>
                            
                            <td class="d-flex align-item-center">
                                <a href="{{ route('category.show', $category->id) }}"><button class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button></a>
                                <a href="{{ route('category.edit', $category->id) }}"><button class="btn btn-sm btn-success ms-1"><i class="fa-solid fa-edit"></i></button></a>
                                {!! Form::open(['route'=>['category.destroy', $category->id], 'method'=>'delete', 'id'=>'category_delete_form_'.$category->id]) !!}
                                {!! Form::button('<i class="fa-solid fa-trash"></i>',['type'=>'button','data-id'=>$category->id,'id'=>'$category_delete_button_'.$category->id,'class'=>'d-inline btn btn-sm ms-1 btn-danger category-delete-button']) !!}
                                {!! Form::close() !!}
                                
                            </td>
                       </tr>
                       @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

    
@push('script')
<script>
    $('.category-delete-button').on('click', function(){
            let id = $(this).attr('data-id')
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to Delete this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $('#category_delete_form_'+id).submit()
  }
})
        })
</script>
@endpush
@if (Session::has('msg'))
@push('script')
    <script>
        Swal.fire({
  position: 'top-end',
  icon: '<?php echo session('class') ?>',
  toast:true,
  title: '<?php echo session('msg') ?>',
  showConfirmButton: false,
  timer: 2500
  
})
    </script>
@endpush
@endif
@endsection