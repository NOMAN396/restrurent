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
<th scope="col">{{ __('Customer') }}</th>
<th scope="col">{{ __('Waiter') }}</th>
<th scope="col">{{ __('Sub Amount') }}</th>
<th scope="col">{{ __('Discount') }}</th>
<th scope="col">{{ __('Date') }}</th>
<th scope="col">{{ __('Total Amount') }}</th>
<th scope="col">{{ __('Order status') }}</th>
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
<a href="{{ route('orders.show', encryptor('encrypt', $p->id)) }}">
<i class="la la-eye" aria-hidden="true"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('orders.destroy',encryptor('encrypt',$p->id)) }}"
method="post">
@csrf
@method('delete')
</form>
</td>

@empty
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


