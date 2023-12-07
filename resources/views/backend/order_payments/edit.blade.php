@extends('backend.layouts.app')

@section('title', trans('update payments'))
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
            action="{{ route('order_payments.update',encryptor('encrypt', $order_payment->id)) }}">
            @csrf
            @method('PATCH')
<div class="form-group">
<label>Order Id</label>
<select  id="order_id" name="order_id" required class="form-control">
<option value="">Select Class</option>
@forelse($order as $c)
<option {{old('order_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
@empty
<option value="">No 0rder found</option>
@endforelse
</select>
</div>

<div class="form-group">
<label>Customer_ID</label>
<select  id="customer_id" name="customer_id" required class="form-control">
<option value="">Select Class</option>
@forelse($customer as $k)
<option {{old('customer_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
@empty
<option value="">No customer_id found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label for="name">Pay Amount <i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('pay_amount') }}" name="pay_amount">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="name">Pay Type<i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('pay_type') }}" name="pay_type">
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