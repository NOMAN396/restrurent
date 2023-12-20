@extends('backend.layouts.app')
@section('title', trans('Order List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('orders.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('customer') }}</th>
<th scope="col">{{ __('waiter_id') }}</th>
<th scope="col">{{ __('sub_amount') }}</th>
<th scope="col">{{ __('discount') }}</th>
<th scope="col">{{ __('order date') }}</th>
<th scope="col">{{ __('total amount') }}</th>
<th scope="col">{{ __('order status') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($order as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>

<td>{{ $p->customer?->customer_name}}</td>
<td>{{ $p->waiter?->name }}</td>
<td>{{ $p->sub_amount }}</td>
<td>{{ $p->discount}}</td>
<td>{{ $p->order_date }}</td>
<td>{{ $p->total_amount }}</td>
<td>@if ($p->order_status == 1)
{{ __('Paid') }}
@else
{{ __('Unpaid') }}
@endif</td>


<td class="white-space-nowrap">
<a href="{{ route('orders.edit',encryptor('encrypt',$p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('orders.destroy',encryptor('encrypt',$p->id)) }}"
method="post">
@csrf
@method('delete')
</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No order Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection


