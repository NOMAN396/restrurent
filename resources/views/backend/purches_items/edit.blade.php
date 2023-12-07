@extends('backend.layouts.app')

@section('title', trans('update purches ID'))
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
            action="{{ route('purches_items.update', encryptor('encrypt', $purches_item->id)) }}">
            @csrf
            @method('PATCH')


            <div class="form-group">
<label for="item_name">Item_name<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('item_name') }}" name="item_name">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
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
<label>supplier_id</label>
<select  id="row_item_id" name="supplier_id" required class="form-control">
<option value="">Select Class</option>
@forelse($supplier as $k)
<option {{old('supplier_id')==$k->id}} value="{{$k->id}}" >{{$k->id}}</option>
@empty
<option value="">No row item found</option>
@endforelse
</select>
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
