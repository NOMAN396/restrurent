@extends('backend.layouts.app')

@section('title', trans('Create Item_varient'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('item_varients.store') }}">
@csrf

<div class="form-group">
<label>Item Id</label>
<select  id="item_id" name="item_id" required class="form-control">
<option value="">Select Class</option>
@forelse($item as $c)
<option {{old('item_id')==$c->id}} value="{{$c->id}}" >{{$c->item_name}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>

<div class="form-group">
<label for="name">Variant Name (English) <i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('varient_name') }}" name="varient_name">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Price <i class="text-danger">*</i></label>
<input type="text" id="price" class="form-control"
value="{{ old('price') }}" name="price">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>


<div class="form-group">
<label for="status">Status</label>
<select id="status" class="form-control" name="status">
<option value="1" @if (old('status') == 1) selected @endif>
Active</option>
<option value="0" @if (old('status') == 0) selected @endif>
Inactive</option>
</select>
@if ($errors->has('status'))
<span class="text-danger"> {{ $errors->first('status') }}</span>
@endif
</div>

<div class="row">
<div class="col-12 d-flex justify-content-end">
<button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
