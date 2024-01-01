@extends('backend.layouts.app')

@section('title', trans('update Din-in'))
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
            action="{{ route('orderlists.update', encryptor('encrypt', $oderlist->id)) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
    <label for="">Table No</label>
<select  id="table_no" name="table_no" required class="form-control">
  <option selected>select Table</option>
  <option value="Table-1">Table-1</option>
  <option value="Table-2">Table-2</option>
  <option value="Table-3">Table-3</option>
  <option value="Table-4">Table-4</option>
  <option value="Table-5">Table-5</option>
  <option value="Table-6">Table-6</option>
  <option value="Table-7">Table-7</option>
  <option value="Table-8">Table-8</option>
  <option value="Table-9">Table-9</option>
  <option value="Table-10">Table-10</option>  
  @if ($errors->has('table_no'))
<span class="text-danger"> {{ $errors->first('table_no') }}</span>
@endif
</select>


<div class="form-group">
<label>Waiter name</label>
<select  id="catagory_id" name="waiter_id" required class="form-control">
<option value="">Select Class</option>
@forelse($waiter as $c)
<option {{old('waiter_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
@empty
<option value="">No Item found</option>
@endforelse
</select>
</div>

<!-- <div class="form-group">
<label for="name">bill_type<i class="text-danger">*</i></label>
<input type="text" id="bill_type" class="form-control"
value="{{ old('bill_type') }}" name="bill_type">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div> -->



<div class="form-group">
    <label for="">Bill_type</label>
<select  id="bill_type" name="bill_type" required class="form-control">
  <option selected>select menu</option>
  <option value="Dine-IN">Dine-In</option>
  <option value="Parcel">Parcel</option>
  @if ($errors->has('bill_type'))
<span class="text-danger"> {{ $errors->first('bill_type') }}</span>
@endif
</select>





<div class="form-group">
<label>Item List</label>
<select  id="items" name="items" required class="form-control">
<option value="">Select Class</option>
@forelse($item as $k)
<option {{old('item')==$k->id}} value="{{$k->id}}" >{{$k->item_name}}</option>
@empty
<option value="">No item found</option>
@endforelse
</select>
</div>

<div class="form-group">
<label for="name">quentity <i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('quentity') }}" name="quentity">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
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
