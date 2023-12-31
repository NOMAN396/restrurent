@extends('backend.layouts.app')
@section('title', trans('Purcheses List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('purcheses.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('supplier_id') }}</th>
<th scope="col">{{ __('sum_amount') }}</th>
<th scope="col">{{ __('vat') }}</th>
<th scope="col">{{ __('discount') }}</th>
<th scope="col">{{ __('ddiscount_type') }}</th>
<th scope="col">{{ __('payment') }}</th>
<th scope="col">{{ __('total_amount') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($purchese as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->supplier_id }}</td>
<td>{{ $p->su_amount}}</td>
<td>{{ $p->vat}}</td>
<td>{{ $p->discount }}</td>
<td>{{ $p->ddiscount_type }}</td>
<td>{{ $p->payment }}</td>
<td>{{ $p->total_amount }}</td>

<td class="white-space-nowrap">
<a href="{{ route('purcheses.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('purcheses.destroy',encryptor('encrypt', $p->id)) }}"
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
