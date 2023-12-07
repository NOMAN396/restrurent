@extends('backend.layouts.app')

@section('title', trans('Create Units'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
                                action="{{ route('units.store') }}">
                                @csrf


            <div class="form-group">
            <label for="name">Name (English) <i class="text-danger">*</i></label>
            <input type="text" id="name" class="form-control"
            value="{{ old('name') }}" name="name">
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
