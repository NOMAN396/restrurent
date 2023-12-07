@extends('backend.layouts.app')

@section('title', trans('Update Order'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('orders.update', encryptor('encrypt', $order->id)) }}">
@csrf
@method('PATCH')
<div class="form-group">
<label for="customer_id">customer_id <i class="text-danger">*</i></label>
<input type="text" id="customer_id" class="form-control"
value="{{ old('customer_id',$order->customer_id) }}" name="customer_id">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif

<label for="sub_amount">sub_amount <i class="text-danger">*</i></label>
<input type="text" id="sub_amount" class="form-control"
value="{{ old('sub_amount', $order->sub_amount) }}" name="sub_amount">
@if ($errors->has('sub_amount'))
<span class="text-danger"> {{ $errors->first('sub_amount') }}</span>
@endif
<label for="vat">vat <i class="text-danger">*</i></label>
<input type="text" id="vat" class="form-control"
value="{{ old('vat',$order->vat) }}" name="vat">
@if ($errors->has('vat'))
<span class="text-danger"> {{ $errors->first('vat') }}</span>
@endif
<label for="discount_type">discount_type <i class="text-danger">*</i></label>
<input type="text" id="discount_type" class="form-control"
value="{{ old('discount_type',$order->discount_type) }}" name="discount_type">
@if ($errors->has('discount_type'))
<span class="text-danger"> {{ $errors->first('discount_type') }}</span>
@endif
<label for="vat">order_date <i class="text-danger">*</i></label>
<input type="date" id="order_date" class="form-control"
value="{{ old('order_date',$order->order_date) }}" name="order_date">
@if ($errors->has('order_date'))
<span class="text-danger"> {{ $errors->first('order_date') }}</span>
@endif
<label for="vat">item_quentity <i class="text-danger">*</i></label>
<input type="text" id="item_quentity" class="form-control"
value="{{ old('item_quentity',$order->item_quentity) }}" name="item_quentity">
@if ($errors->has('item_quentity'))
<span class="text-danger"> {{ $errors->first('item_quentity') }}</span>
@endif
<label for="vat">total_amount <i class="text-danger">*</i></label>
<input type="text" id="total_amount" class="form-control"
value="{{ old('total_amount',$order->total_amount) }}" name="total_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('total_amount') }}</span>
@endif
<label for="vat">waiter_id <i class="text-danger">*</i></label>
<input type="text" id="waiter_id" class="form-control"
value="{{ old('waiter_id',$order->waiter_id) }}" name="waiter_id">
@if ($errors->has('waiter_id'))
<span class="text-danger"> {{ $errors->first('waiter_id') }}</span>
@endif
<div class="form-group">
<label for="status">order_status</label>
<select id="order_status" class="form-control" name="order_status">
<option value="1" @if (old('order_status') == 1) selected @endif>
Active</option>
<option value="0" @if (old('order_status') == 0) selected @endif>
Inactive</option>
</select>
@if ($errors->has('order_status'))
<span class="text-danger"> {{ $errors->first('order_status') }}</span>
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
