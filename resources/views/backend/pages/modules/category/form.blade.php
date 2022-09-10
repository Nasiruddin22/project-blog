{!! Form::label('name','Catory Name', ['class' => 'control-label my-2']) !!}
{!! Form::text('name',null,['id'=>'name','class'=>'form-control form-control-sm','placeholder'=>'Enter Catagory Name']) !!}
@error('name')
<small><p class="mb-0 text-danger">{{ $message }}</p></small>
@enderror

{!! Form::label('Slug', null, ['class' => 'control-label my-2']) !!}
{!! Form::text('slug', null,['id'=>'slug','class'=>'form-control form-control-sm']) !!}
@error('slug')
<small><p class="mb-0 text-danger">{{ $message }}</p></small>
@enderror

{!! Form::label('Status', null, ['class' => 'control-label my-2']) !!}
{!! Form::select('status', [1=>'Publice',0=>'Unpublice'],null,['class'=>'form-select form-select-sm','placeholder'=>'Select Catagory Status']) !!}
@error('status')
<small><p class="mb-0 text-danger">{{ $message }}</p></small>
@enderror
{!! Form::label('order_by', 'Category Serial', ['class' => 'control-label my-2']) !!}
{!! Form::number('order_by',null,['class'=>'form-control form-control-sm','placeholder'=>'Select Catagory serial']) !!}
@error('order_by')
<small><p class="mb-0 text-danger">{{ $message }}</p></small>
@enderror

@push('script')
<script>
    $('#name').on('input', function () {
        let value = $(this).val()
        .replaceAll(' ' , '-') 
        .toLowerCase()
        
        $('#slug').val(value)
    })

</script>
@endpush