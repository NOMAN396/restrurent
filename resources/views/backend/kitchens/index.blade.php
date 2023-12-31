@extends('backend.layouts.app')
@section('title', trans('Kitchen List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('kitchens.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('kitchen_name') }}</th>
<th scope="col">{{ __('kichen_catagories_name') }}</th>
<th scope="col">{{ __('Status') }}</th>
<th scope="col">{{ __('Create_at') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($kitchen as $p)
<tr>
<th scope="row">{{ ++$loop->index}}</th>

<td>{{ $p->name }}</td>
<td>{{ $p->kitchen_catagories?->name}}</td>
<td>{{ $p->status }}@if ($p->status == 1)
{{ __('Active') }}
@else
{{ __('Inactive') }}
@endif</td>
<td>{{ $p->created_at }}</td>
<td class="white-space-nowrap">
<a href="{{ route('kitchens.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('kitchens.destroy', encryptor('encrypt', $p->id)) }}"
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
