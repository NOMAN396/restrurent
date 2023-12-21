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

@section('title', trans('Order List'))

@section('content')
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
<div class="row match-height">
<div class="col-6">
<div class="card">
<div class="card-body">


<div class='parent'><p class="position-absolute"><i class="la la-print" aria-hidden="true"><a href="">Print</a></i></p>
  <div class='child'>Customer Name :</div>
  <div class='child'>{{$order->customer?->customer_name}}</div>
</div>
<div class='parent'>
  <div class='child'>Waiter Name :</div>
  <div class='child'>{{$order->Waiter?->name}}</div>
</div>
<div class='parent'>
  <div class='child'>Sub Amount :</div>
  <div class='child'>{{$order->sub_amount}}</div>
</div>
<div class='parent'>
  <div class='child'>Discount :</div>
  <div class='child'>{{$order->discount}}</div>
</div>
<div class='parent'>
  <div class='child'>Date :</div>
  <div class='child'>{{$order->order_date}}</div>
</div>
<div class='parent'>
  <div class='child'>Total Amount :</div>
  <div class='child'>{{$order->total_amount}}</div>
</div>





<tr>
    <td>Signature......</td>
   
    
</tr>
</div>
</div>
</div>
</section>
@endsection
