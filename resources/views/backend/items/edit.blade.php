@extends('backend.layouts.app')

@section('title', trans('update Item'))
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
            action="{{ route('items.update', encryptor('encrypt', $item->id)) }}">
            @csrf
            @method('PATCH')
<div class="row">
<div class="col-md-6 col-12">
            <div class="form-group">
            <label for="name">Item Name (English) <i class="text-danger">*</i></label>
            <input type="text" id="name" class="form-control"
            value="{{ old('item_name') }}" name="item_name">
            @if ($errors->has('name'))
            <span class="text-danger"> {{ $errors->first('name') }}</span>
            @endif
            </div>
</div>

</div>
                                    <div class="form-group">
                                        <label>Category List</label>
                                        <select  id="catagory_id" name="catagory_id" required class="form-control">
                                            <option value="">Select Class</option>
                                            @forelse($catagory as $c)
                                            <option {{ old('catagory_id',$item->catagory_id)==$c->id?"selected":""}} value="{{$c->id}}" >{{$c->name}}</option>
                                            @empty
                                            <option value="">No Item found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kitchen List</label>
                                        <select  id="kitchen_id" name="kitchen_id" required class="form-control">
                                            <option value="">Select Class</option>
                                            @forelse($kitchen as $k)
                                            <option {{old('kitchen_id')==$k->id}} value="{{$k->id}}" >{{$k->name}}</option>
                                            @empty
                                            <option value="">No Item found</option>
                                            @endforelse
                                        </select>
                                    </div>

<div class="col-md-6 col-12">
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
</div>
<div class="col-md-6 col-12">
<div class="form-group">
<label for="image">Image</label>
<input type="file" id="image" class="form-control"
placeholder="Image" name="image">
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
