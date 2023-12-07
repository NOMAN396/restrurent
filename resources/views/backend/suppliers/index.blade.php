@extends('backend.layouts.app')
@section('title', trans('Kitchen List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('suppliers.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('sub_amount') }}</th>
<th scope="col">{{ __('vat') }}</th>
<th scope="col">{{ __('discount') }}</th>
<th scope="col">{{ __('discount_type') }}</th>
<th scope="col">{{ __('payment') }}</th>
<th scope="col">{{ __('total') }}</th>
<th scope="col">{{ __('item_quentity') }}</th>
<th scope="col">{{ __('order_date') }}</th>
<th scope="col">{{ __('order_status') }}</th>
<th scope="col">{{ __('Create_at') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($supplier as $p)
<tr>
<th scope="row">{{ ++$loop->index}}</th>

<td>{{ $p->sub_amount }}</td>
<td>{{ $p->vat}}</td>
<td>{{ $p->discount}}</td>
<td>{{ $p->discount_type}}</td>
<td>{{ $p->payment}}</td>
<td>{{ $p->total}}</td>
<td>{{ $p->item_quentity}}</td>
<td>{{ $p->order_date}}</td>
<td>{{ $p->order_status }}@if ($p->order_status == 1)
{{ __('Active') }}
@else
{{ __('Inactive') }}
@endif</td>
<td>{{ $p->created_at }}</td>
<td class="white-space-nowrap">
<a href="{{ route('suppliers.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('suppliers.destroy', encryptor('encrypt', $p->id)) }}"
method="post">
@csrf
@method('delete')

</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No kitchens Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
