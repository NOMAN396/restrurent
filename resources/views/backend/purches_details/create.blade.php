@extends('backend.layouts.app')

@section('title', trans('Create Purches_detail'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('purches_details.store') }}">
@csrf

<div class="form-group">
<label>purches ID</label>
<select  id="purches_id" name="purches_id" required class="form-control">
<option value="">Select Class</option>
@forelse($purchese as $c)
<option {{old('purches_id')==$c->id}} value="{{$c->id}}">{{$c->id}}</option>
@empty
<option value="">No purces found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>row_item List</label>
<select  id="row_item_id" name="row_item_id" required class="form-control">
<option value="">Select Class</option>
@forelse($row_item as $k)
<option {{old('row_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No row item found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>Unit Id</label>
<select  id="unit_id" name="unit_id" required class="form-control">
<option value="">Select Class</option>
@forelse($unit as $k)
<option {{old('unit_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No purches found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label for="quentity">quentity<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('quentity') }}" name="quentity">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="name">price <i class="text-danger">*</i></label>
<input type="text" id="price" class="form-control"
value="{{ old('price') }}" name="price">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
</div>
</div>
<div class="row">
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
