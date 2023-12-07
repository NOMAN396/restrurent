@extends('backend.layouts.app')
@section('title', trans('Stocks List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('stocks.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('item_id') }}</th>
<th scope="col">{{ __('row_id') }}</th>
<th scope="col">{{ __('purches_id') }}</th>
<th scope="col">{{ __('kitchen_id') }}</th>
<th scope="col">{{ __('Unit') }}</th>
<th scope="col">{{ __('quentity') }}</th>
<th scope="col">{{ __('price') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($stock as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->item_id}}</td>
<td>{{ $p->row_id }}</td>
<td>{{ $p->purches_id }}</td>
<td>{{ $p->kitchen_id }}</td>
<td>{{ $p->Unit?->name }}</td>
<td>{{ $p->quentity }}</td>
<td>{{ $p->price }}</td>
<td class="white-space-nowrap">
<a href="{{ route('stocks.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('stocks.destroy', encryptor('encrypt', $p->id)) }}"
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
