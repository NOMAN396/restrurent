@extends('backend.layouts.app')
@section('title', trans('Purches List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('purches_payments.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('order_id') }}</th>
<th scope="col">{{ __('customer_id') }}</th>
<th scope="col">{{ __('pay_amount') }}</th>
<th scope="col">{{ __('pay_type') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($purches_payment as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->order_id }}</td>
<td>{{ $p->customer_id}}</td>
<td>{{ $p->payment }}</td>
<td>{{ $p->paytype }}</td>

<td class="white-space-nowrap">
<a href="{{ route('purches_payments.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('purches_payments.destroy', encryptor('encrypt', $p->id)) }}"
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
