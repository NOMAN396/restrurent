@extends('backend.layouts.app')
@section('title', trans('Item List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('items.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('item_name') }}</th>
<th scope="col">{{ __('image') }}</th>
<th scope="col">{{ __('catagory_name') }}</th>
<th scope="col">{{ __('kitchen_name') }}</th>
<th scope="col">{{ __('cocking_type') }}</th>
<th scope="col">{{ __('description') }}</th>
<th scope="col">{{ __('status') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($item as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->item_name }}</td>
<td><img width="50px" src="{{ asset('public/uploads/items/' . $p->image) }}"
alt=""></td>
<td>{{ $p->catagory?->name}}</td>
<td>{{ $p->kitchen_id}}</td>
<td>{{ $p->cocking_type }}</td>
<td>{{ $p->description }}</td>
<td>{{ $p->status }}@if ($p->status == 1)
{{ __('Active') }}
@else
{{ __('Inactive') }}
@endif</td>
<td class="white-space-nowrap">
<a href="{{ route('items.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('items.destroy', encryptor('encrypt', $p->id)) }}"
method="post">
@csrf
@method('delete')
</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No Catagories Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
