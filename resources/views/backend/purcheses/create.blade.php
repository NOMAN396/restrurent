@extends('backend.layouts.app')

@section('title', trans('Create Item'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('purcheses.store') }}">
@csrf

<div class="form-group">
<label>supplier_id</label>
<select  id="supplier_id" name="supplier_id" required class="form-control">
<option value="">Select Class</option>
@forelse($supplier as $c)
<option {{old('supplier_id')==$c->id}} value="{{$c->id}}">{{$c->id}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label for="name">Sum Amount<i class="text-danger">*</i></label>
<input type="text" id="cocking_type" class="form-control"
value="{{ old('su_amount') }}" name="su_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">vat<i class="text-danger">*</i></label>
<input type="text" id="cocking_type" class="form-control"
value="{{ old('vat') }}" name="vat">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="name">discount <i class="text-danger">*</i></label>
<input type="text" id="discount" class="form-control"
value="{{ old('discount') }}" name="discount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">ddiscount_type <i class="text-danger">*</i></label>
<input type="text" id="discount" class="form-control"
value="{{ old('ddiscount_type') }}" name="ddiscount_type">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">payment <i class="text-danger">*</i></label>
<input type="text" id="discount" class="form-control"
value="{{ old('payment') }}" name="payment">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">total_amount <i class="text-danger">*</i></label>
<input type="text" id="total_amount" class="form-control"
value="{{ old('total_amount') }}" name="total_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
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
