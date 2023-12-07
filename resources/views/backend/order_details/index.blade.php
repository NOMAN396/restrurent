@extends('backend.layouts.app')
@section('title', trans('Order Details'))
@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('order_details.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('Order_id') }}</th>
<th scope="col">{{ __('Item_id') }}</th>
<th scope="col">{{ __('Price') }}</th>
<th scope="col">{{ __('quaintity') }}</th>
<th scope="col">{{ __('Create_at') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($order_detail as $p)
<tr>
<th scope="row">{{ ++$loop->index}}</th>
 <!-- <td>{{$p->id}}</td> -->
<td>{{ $p->order_id }}</td>
<td>{{ $p->item_id}}</td>
<td>{{ $p->quaintity}}</td>
<td>{{ $p->price}}</td>
<td>{{ $p->created_at }}</td>
<td class="white-space-nowrap">
<a href="{{ route('order_details.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('order_details.destroy', encryptor('encrypt', $p->id)) }}"
method="post">
@csrf
@method('delete')

</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No Order Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
