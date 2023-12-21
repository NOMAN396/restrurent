<style>
.parent {
  margin: 0.5rem;
  padding: 0.15rem 0.15rem;
  text-align: center;
  
}
.child {
  display: inline-block;
 
  padding: 0.15rem 0.15rem;
  vertical-align: middle;
}
</style>

@extends('backend.layouts.app')

@section('title', trans('Kitchen List'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-6">
<div class="card">
<div class="card-body">


<div class='parent'><p class="position-absolute"><i class="la la-print" aria-hidden="true"><a href="">Print</a></i></p>
  <div class='child'>Table Name :</div>
  <div class='child'>{{$oderlist->table_no}}</div>
</div>
<div class='parent'>
  <div class='child'>Waiter Name :</div>
  <div class='child'>{{$oderlist->Waiter?->name}}</div>
</div>
<div class='parent'>
  <div class='child'>Bill Type :</div>
  <div class='child'>{{$oderlist->bill_type}}</div>
</div>
<div class='parent'>
  <div class='child'>Item Name :</div>
  <div class='child'>{{$oderlist->Item?->item_name}}</div>
</div>
<div class='parent'>
  <div class='child'>Quentity :</div>
  <div class='child'>{{$oderlist->quentity}}</div>
</div>





<tr>
    <td>Signature......</td>
   
    
</tr>
</div>
</div>
</div>
</section>
@endsection
