@extends('backend.layouts.app')

@section('title', trans('Create Order'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('orders.store') }}">
@csrf
<div class="form-group">
<label>Customer_ID</label>
<select  id="catagory_id" name="customer_id" required class="form-control">
<option value="">Select Class</option>
@forelse($customer as $c)
<option {{old('customer_id')==$c->id}} value="{{$c->id}}">{{$c->customer_name}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label for="sub_amount">sub_amount <i class="text-danger">*</i></label>
<input type="text" id="sub_amount" class="form-control"
value="{{ old('sub_amount') }}" name="sub_amount">
@if ($errors->has('sub_amount'))
<span class="text-danger"> {{ $errors->first('sub_amount') }}</span>
@endif

</div>
<div class="form-group">
<label for="vat">vat <i class="text-danger">*</i></label>
<input type="text" id="vat" class="form-control"
value="{{ old('vat') }}" name="vat">
@if ($errors->has('vat'))
<span class="text-danger"> {{ $errors->first('vat') }}</span>
@endif
</div>
<div class="form-group">
<label for="discount_type">discount_type <i class="text-danger">*</i></label>
<input type="text" id="discount_type" class="form-control"
value="{{ old('discount_type') }}" name="discount_type">
@if ($errors->has('discount_type'))
<span class="text-danger"> {{ $errors->first('discount_type') }}</span>
@endif
</div>
<div class="form-group">
<label for="vat">order_date <i class="text-danger">*</i></label>
<input type="date" id="order_date" class="form-control"
value="{{ old('order_date') }}" name="order_date">
@if ($errors->has('order_date'))
<span class="text-danger"> {{ $errors->first('order_date') }}</span>
@endif
</div>

<div class="form-group">
<label for="vat">item_quentity <i class="text-danger">*</i></label>
<input type="text" id="item_quentity" class="form-control"
value="{{ old('item_quentity') }}" name="item_quentity">
@if ($errors->has('item_quentity'))
<span class="text-danger"> {{ $errors->first('item_quentity') }}</span>
@endif
</div>
<div class="form-group">
<label for="vat">total_amount <i class="text-danger">*</i></label>
<input type="text" id="total_amount" class="form-control"
value="{{ old('total_amount') }}" name="total_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('total_amount') }}</span>
@endif
</div>
<div class="form-group">
<label for="vat">waiter_id <i class="text-danger">*</i></label>
<input type="number" id="waiter_id" class="form-control"
value="{{ old('waiter_id') }}" name="waiter_id">
@if ($errors->has('waiter_id'))
<span class="text-danger"> {{ $errors->first('waiter_id') }}</span>
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
