@extends('backend.layouts.app')

@section('title', trans('update Booking List'))
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
            action="{{ route('bookingtables.update', encryptor('encrypt', $bookingtable->id)) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
<label for="item_name">name<i class="text-danger">*</i></label>
<input type="text" id="name" class="form-control"
value="{{ old('name',$bookingtable->name) }}" name="name">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="item_name">email<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('email',$bookingtable->email) }}" name="email">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="item_name">phone<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('phone',$bookingtable->phone) }}" name="phone">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="date">date<i class="text-danger">*</i></label>
<input type="date" id="quentity" class="form-control"
value="{{ old('date',$bookingtable->date) }}" name="date">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>

<div class="form-group">
<label for="item_name">time<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('time',$bookingtable->time) }}" name="time">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group">
<label for="item_name">people<i class="text-danger">*</i></label>
<input type="text" id="quentity" class="form-control"
value="{{ old('people',$bookingtable->people) }}" name="people">
@if ($errors->has('name'))
<span class="text-danger"> {{ $errors->first('name') }}</span>
@endif
</div>
<div class="row">
<div class="col-12 d-flex justify-content-end">
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
