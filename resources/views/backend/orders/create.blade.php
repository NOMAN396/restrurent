@extends('backend.layouts.app')

@section('title', trans('Create Order'))

@section('content')
<style>
    .modal {
        z-index: 1051;
    }
</style>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action="{{ route('orders.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4" style="max-height:600px; overflow-x:auto">
                                    <h3>Items</h3>
                                    <ul class="list-group">
                                        @forelse($item as $c)
                                            <li class="list-group-item" style="cursor: pointer;" onclick="add_item({{$c->id}},'{{$c->item_name}}')">
                                                <img width="50px" src="{{ asset('public/uploads/items/' . $c->image) }}" alt=""> 
                                                {{$c->item_name}}
                                            </li>
                                        @empty
                                        
                                        @endforelse
                                    </ul>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Customer</label>
                                                <select  id="catagory_id" name="customer_id" required class="form-control">
                                                    <option value="">Select Customer</option>
                                                    @forelse($customer as $c)
                                                        <option {{old('customer_id')==$c->id}} value="{{$c->id}}">{{$c->customer_name}}</option>
                                                    @empty
                                                        <option value="">No Customer found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="vat">Waiter <i class="text-danger">*</i></label>
                                            <select  id="waiter_id" name="waiter_id" required class="form-control">
                                                <option value="">Select Waiter</option>
                                                @forelse($waiter as $c)
                                                    <option {{old('waiter_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
                                                @empty
                                                    <option value="">No Waiter found</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="vat">Order Date <i class="text-danger">*</i></label>
                                            <input type="date" id="order_date" class="form-control"
                                            value="{{ old('order_date') }}" name="order_date">
                                            @if ($errors->has('order_date'))
                                            <span class="text-danger"> {{ $errors->first('order_date') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row mt-2">
                                                <div class="col-sm-4">
                                                    Item
                                                </div>
                                                <div class="col-sm-4">
                                                    Unite price
                                                </div>
                                                <div class="col-sm-4">
                                                    Sub Price
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="items">

                                        </div>
                                        <div class="col-sm-12 mt-2">
                                            <div class="row">
                                                <div class="col-sm-6 text-right">Sub Amount:</div>
                                                <div class="col-sm-6 text-right">
                                                    <input type="hidden" id="sub_amount" name="sub_amount">
                                                    <span class="sub_amount"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-right">Discount:</div>
                                                <div class="col-sm-3">
                                                    <input type="text" onkeyup="cal_total()" id="discount" class="form-control" value="{{ old('discount') }}" name="discount">
                                                </div>
                                                <div class="col-sm-3 text-right">
                                                    <input type="hidden" id="disamt" name="disamt">
                                                    <span class="disamt"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-right">Total:</div>
                                                <div class="col-sm-6 text-right">
                                                    <input type="hidden" id="total_amount" name="total_amount">
                                                    <span class="total_amount"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="itemv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Item Varient</h5>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label for="">Varient</label>
                    <select onchange="set_price(this)" name="" id="varient" class="form-control">
                        <option value="">Select Varient</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="">Price</label>
                    <input type="text" id="item_v_price" class="form-control">
                    <input type="hidden" id="item_name">
                    <input type="hidden" id="item_id">
                </div>
                <div class="col-sm-4">
                    <label for="">Qty</label>
                    <input type="text" id="item_qty" class="form-control">
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button onclick="add_price()" type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
@endsection



@push('scripts')
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('itemv'), {keyboard: false});
        function add_price(){
            let price=$('#item_v_price').val();
            let varient=$('#varient option:selected').text();
            let varientid=$('#varient').val();
            let item_name=$('#item_name').val();
            let item_id=$('#item_id').val();
            let item_qty=$('#item_qty').val();
            let itemsub=(price*item_qty);
            let line=`<div class="row border-bottom">
                            <div class="col-sm-4">
                                Item: ${item_name}<br>
                                ${varient}
                                <input type="hidden" name="varientid[]" value="${varientid}" class="varientid">
                                <input type="hidden" name="item_id[]" value="${item_id}" class="item_id">
                            </div>
                            <div class="col-sm-4">
                                ${price} x ${item_qty}
                                <input type="hidden" name="item_v_price[]" value="${price}" class="item_v_price">
                                <input type="hidden" name="item_qty[]" value="${item_qty}" class="item_qty">
                            </div>
                            <div class="col-sm-4">
                                ${itemsub}
                                <input type="hidden" name="itemsub[]" value="${itemsub}" class="itemsub">
                            </div>
                        </div>`;
            $('#items').append(line);
            myModal.hide();
            cal_total();
        }
        function add_item(e,name){
            $.ajax({
                autoFocus: true,
                url: "{{route('get_varient')}}",
                method: 'GET',
                dataType: 'json',
                data: {
                    item_id: e
                },
                success: function(res) {
                    $('#varient').html(res);
                    $('#item_v_price').val('');
                    $('#item_qty').val('');
                    myModal.show();
                    $('#item_name').val(name);
                    $('#item_id').val(e);
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
        function set_price(e){
            let item_v_price=$(e).find('option:selected').data('price');
            $('#item_v_price').val(item_v_price)
        }
        function cal_total(){
            let itemsub=dis_amt=0;
            let discount=$('#discount').val();
            $('.itemsub').each(function(){
                itemsub+=parseFloat($(this).val());
            });
            if(discount){
                dis_amt=(itemsub*(discount/100));
            }
            $('#sub_amount').val(itemsub);
            $('.sub_amount').text(itemsub);
            $('#disamt').val(dis_amt);
            $('.disamt').text(dis_amt);
            $('#total_amount').val(itemsub - dis_amt);
            $('.total_amount').text(itemsub - dis_amt);
            
        }
    </script>
@endpush
