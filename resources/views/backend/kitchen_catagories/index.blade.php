@extends('backend.layouts.app')
@section('title', trans('Kitchen catagories'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('kitchen_catagories.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('Kitchen_catagories_name')}}</th>
<th scope="col">{{ __('status') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($kitchen_catagory as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->name }}</td>
<td>{{ $p->status }}@if ($p->status == 1)
{{ __('Active') }}
@else
{{ __('Inactive') }}
@endif</td>
<td class="white-space-nowrap">
<a href="{{ route('kitchen_catagories.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('kitchen_catagories.destroy', encryptor('encrypt', $p->id)) }}"
method="post">
@csrf
@method('delete')
</form>
</td>

@empty
<tr>
<th colspan="8" class="text-center">No kitchen_catagories Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
