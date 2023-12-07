@extends('backend.layouts.app')

@section('title', trans('Create Catagories'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
                                action="{{ route('customers.store') }}">
                                @csrf


            <div class="form-group">
            <label for="name">Customer_name <i class="text-danger">*</i></label>
            <input type="text" id="name" class="form-control"
            value="{{ old('customer_name') }}" name="customer_name">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>

            <div class="form-group">
            <label for="name">contact<i class="text-danger">*</i></label>
            <input type="number" id="name" class="form-control"
            value="{{ old('contact') }}" name="contact">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>

            <div class="form-group">
            <label for="name">Address <i class="text-danger">*</i></label>
            <textarea class="form-control" id="textAreaExample1" rows="4"
            value="{{ old('address') }}" name="address"></textarea>
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>

            <div class="form-group">
            <label for="name">Birthdate<i class="text-danger">*</i></label>
            <input type="date" id="name" class="form-control"
            value="{{ old('birthdate') }}" name="birthdate">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
<div class="row">
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
