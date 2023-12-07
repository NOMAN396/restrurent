@extends('backend.layouts.app')

@section('title', trans('update Orderdetail'))
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
action="{{ route('order_details.update', encryptor('encrypt', $order_detail->id)) }}">
@csrf
@method('PATCH')
<div class="form-group">
<label>Order_id</label>
<select  id="Order_id" name="Order_id" required class="form-control">
<option value="">Select Class</option>
@forelse($order as $o)
<option {{old('order_id')==$o->id}} value="{{$o->id}}" >{{$o->id}}</option>
@empty
<option value="">No Order found</option>
@endforelse
</select>
</div>
<div class="form-group">
<label>Item_id</label>
<select  id="item_id" name="item_id" required class="form-control">
<option value="">Select Class</option>
@forelse($item as $i)
<option {{old('item_id')==$i->id}} value="{{$i->id}}">{{$i->item_name}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>

<div class="form-group">
<label for="quaintity">Quaintity<i class="text-danger">*</i></label>
<input type="text" id="cockquaintitying_type" class="form-control"
value="{{ old('quaintity',$order_detail->quaintity) }}" name="quaintity">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="name">Price<i class="text-danger">*</i></label>
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
