@extends('backend.layouts.app')

@section('title', trans('Edit Row Items'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-12">
<div class="card">
<div class="card-content">
<div class="card-body">
<form class="form" method="post" enctype="multipart/form-data"
action="{{ route('row_items.update', encryptor('encrypt', $row_item->id)) }}">
@csrf
@method('PATCH')

            <div class="form-group">
            <label for="name">Name<i class="text-danger">*</i></label>
            <input type="text" id="name" class="form-control"
            value="{{ old('name',$row_item->name) }}" name="name">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
            <div class="form-group">
            <label for="name">Description<i class="text-danger">*</i></label>
            <input type="text" id="description" class="form-control"
            value="{{ old('description',$row_item->description) }}" name="description">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>

<div class="form-group">
<label for="status">Status</label>
<select id="status" class="form-control" name="status">
<option value="1" @if (old('status') == 1) selected @endif>
Active</option>
<option value="0" @if (old('status') == 0) selected @endif>
Inactive</option>
</select>
@if ($errors->has('status'))
<span class="text-danger"> {{ $errors->first('status') }}</span>
@endif
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
