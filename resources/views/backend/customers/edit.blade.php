@extends('backend.layouts.app')

@section('title', trans('Edit Customer'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('customers.update', encryptor('encrypt', $customer->id)) }}">
@csrf
@method('PATCH')

            <div class="form-group">
            <label for="name">Name (English) <i class="text-danger">*</i></label>
            <input type="text" id="name" class="form-control"
            value="{{ old('customer_name',$customer->customer_name) }}" name="customer_name">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label for="name">Contact <i class="text-danger">*</i></label>
            <input type="number" id="name" class="form-control"
            value="{{ old('contact',$customer->contact) }}" name="name">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label for="name">Address <i class="text-danger">*</i></label>
            <textarea class="form-control" id="textAreaExample1" rows="4"
            value="{{ old('address',$customer->address) }}" name="address"></textarea>
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label for="name">Name (English) <i class="text-danger">*</i></label>
            <input type="date" id="name" class="form-control"
            value="{{ old('birthdate',$customer->birthdate) }}" name="birthdate">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>



</div>
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
