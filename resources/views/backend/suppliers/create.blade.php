@extends('backend.layouts.app')

@section('title', trans('Create Supplier'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
    action="{{ route('suppliers.store') }}">
    @csrf


<div class="form-group">
<label for="name">sub_amount<i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('sub_amount') }}" name="sub_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Vat<i class="text-danger">*</i></label>
<input type="text" id="vat" class="form-control"
value="{{ old('vat') }}" name="vat">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Discount <i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('discount') }}" name="discount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Discount_type <i class="text-danger">*</i></label>
<input type="text" id="discount_type" class="form-control"
value="{{ old('discount_type') }}" name="discount_type">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Payment<i class="text-danger">*</i></label>
<input type="text" id="payment" class="form-control"
value="{{ old('payment') }}" name="payment">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="total">Total<i class="text-danger">*</i></label>
<input type="text" id="total" class="form-control"
value="{{ old('total') }}" name="total">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Item_quentity<i class="text-danger">*</i></label>
<input type="text" id="item_quentity" class="form-control"
value="{{ old('item_quentity') }}" name="item_quentity">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Order_date<i class="text-danger">*</i></label>
<input type="date" id="order_date" class="form-control"
value="{{ old('order_date') }}" name="order_date">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="status">Status</label>
<select id="status" class="form-control" name="order_status">
<option value="1" @if (old('order_status') == 1) selected @endif>
Active</option>
<option value="0" @if (old('order_status') == 0) selected @endif>
Inactive</option>
</select>
@if ($errors->has('status'))
<span class="text-danger"> {{ $errors->first('status') }}</span>
@endif
</div>
</div>

</div>
</div>

<div class="row">
<button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
