@extends('backend.layouts.app')

@section('title', trans('update Item'))
@section('pageSubTitle', trans('Update'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
            action="{{ route('stocks.update', encryptor('encrypt', $stock->id)) }}">
            @csrf
            @method('PATCH')


            <div class="form-group">
<label>Item ID</label>
<select  id="item_id" name="item_id" required class="form-control">
<option value="">Select Class</option>
@forelse($item as $c)
<option {{old('item_id')==$c->id}} value="{{$c->id}}">{{$c->id}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>row_item List</label>
<select  id="row_id" name="row_id" required class="form-control">
<option value="">Select Class</option>
@forelse($row_item as $k)
<option {{old('row_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No Row Item found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>purches_id List</label>
<select  id="purches_id" name="purches_id" required class="form-control">
<option value="">Select Class</option>
@forelse($purcheses as $k)
<option {{old('purches_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No purches_id found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>kitchen List</label>
<select  id="kitchen_id" name="kitchen_id" required class="form-control">
<option value="">Select Class</option>
@forelse($kitchen as $k)
<option {{old('kitchen_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No kitchen found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>unit_id List</label>
<select  id="unit_id" name="unit_id" required class="form-control">
<option value="">Select Class</option>
@forelse($unit as $k)
<option {{old('unit_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No  unit found</option>
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
