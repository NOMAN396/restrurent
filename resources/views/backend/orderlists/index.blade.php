@extends('backend.layouts.app')
@section('title', trans('Din-in List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('orderlists.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('table_no') }}</th>
<th scope="col">{{ __('waiter_Name') }}</th>
<th scope="col">{{ __('bill_type') }}</th>
<th scope="col">{{ __('item') }}</th>
<th scope="col">{{ __('itemquentity') }}</th>

<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($oderlist as $c)
<tr>
<th scope="row">{{ ++$loop->index}}</th>
<!-- <td>{{$c->id}}</td>  -->
<td>{{ $c->table_no }}</td>
<td>{{ $c->Waiter?->name }}</td>
<td>{{ $c->bill_type }}</td>
<td>{{ $c->Item?->item_name}}</td>
<td>{{ $c->quentity }}</td>
<td class="white-space-nowrap">
<a href="{{ route('orderlists.edit', encryptor('encrypt', $c->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $c->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $c->id }}"
action="{{ route('orderlists.destroy', encryptor('encrypt', $c->id)) }}"
method="post">
@csrf
@method('delete')

</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No order  Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
