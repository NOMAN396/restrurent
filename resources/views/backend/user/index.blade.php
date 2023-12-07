@extends('backend.layouts.app')
@section('title', trans('Users List'))

@section('content')


<div class="row" id="table-bordered">
<div class="col-12">
<div class="card">

<!-- table bordered -->
<div class="table-responsive">
<div>
<a class="pull-right fs-1 btn btn-sm btn-info m-2" href="{{ route('user.create') }}"><i
class="la la-plus"></i></a>
</div>
<table class="table table-bordered mb-0">
<thead>
<tr>
<th scope="col">{{ __('#SL') }}</th>
<th scope="col">{{ __('Name') }}</th>
<th scope="col">{{ __('Email') }}</th>
<th scope="col">{{ __('Contact') }}</th>
<th scope="col">{{ __('Image') }}</th>
<th scope="col">{{ __('Full Access') }}</th>
<th scope="col">{{ __('Status') }}</th>
<th class="white-space-nowrap">{{ __('Action') }}</th>
</tr>
</thead>
<tbody>
@forelse($data as $p)
<tr>
<th scope="row">{{ ++$loop->index }}</th>
<td>{{ $p->name_en }}</td>
<td>{{ $p->email }}</td>
<td>{{ $p->contact_no_en }}</td>
<td><img width="50px" src="{{ asset('public/uploads/users/' . $p->image) }}"
alt=""></td>
<td>
@if ($p->full_access == 1)
{{ __('Yes') }}
@else
{{ __('No') }}
@endif
</td>
<td>
@if ($p->status == 1)
{{ __('Active') }}
@else
{{ __('Inactive') }}
@endif
</td>
<!-- or <td>{{ $p->status == 1 ? 'Active' : 'Inactive' }}</td>-->
<td class="white-space-nowrap">
<a href="{{ route('user.edit', encryptor('encrypt', $p->id)) }}">
<i class="la la-edit"></i>
</a>
<a href="javascript:void()" onclick="$('#form{{ $p->id }}').submit()">
<i class="la la-trash"></i>
</a>
<form id="form{{ $p->id }}"
action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}"
method="post">
@csrf
@method('delete')
</form>
</td>
</tr>
@empty
<tr>
<th colspan="8" class="text-center">No Pruduct Found</th>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
