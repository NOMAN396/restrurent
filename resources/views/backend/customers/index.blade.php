@extends('backend.layouts.app')
@section('title', trans('Customer List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('customers.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('customer_name') }}</th>
<th scope="col">{{ __('contact') }}</th>
<th scope="col">{{ __('address') }}</th>
<th scope="col">{{ __('birthdate') }}</th>

<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($customer as $c)
<tr>
<th scope="row">{{ ++$loop->index}}</th>
<!-- <td>{{$c->id}}</td> -->
<td>{{ $c->customer_name }}</td>
<td>{{ $c->contact }}</td>
<td>{{ $c->address }}</td>
<td>{{ $c->birthdate }}</td>
<td class="white-space-nowrap">
<a href="{{ route('customers.edit', encryptor('encrypt', $c->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $c->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $c->id }}"
action="{{ route('customers.destroy', encryptor('encrypt', $c->id)) }}"
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
