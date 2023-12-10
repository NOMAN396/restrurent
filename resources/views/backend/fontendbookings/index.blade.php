@extends('backend.layouts.app')
@section('title', trans(' online table List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('fontendbookings.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('name') }}</th>
<th scope="col">{{ __('email') }}</th>
<th scope="col">{{ __('phone') }}</th>
<th scope="col">{{ __('date') }}</th>
<th scope="col">{{ __('time') }}</th>
<th scope="col">{{ __('people') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($fbookingtable as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->name }}</td>
<td>{{ $p->email}}</td>
<td>{{ $p->phone}}</td>
<td>{{ $p->date }}</td>
<td>{{ $p->time }}</td>
<td>{{ $p->people }}</td>
<td class="white-space-nowrap">
<a href="{{ route('fontendbookings.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('fontendbookings.destroy', encryptor('encrypt', $p->id)) }}"
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
