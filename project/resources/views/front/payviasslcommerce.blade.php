@extends('layouts.front')

@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="pages">
          <li>
            <a href="{{ route('front.index') }}">
              {{ $langg->lang17 }}
            </a>
          </li>
          <li>
            <a href="{{ route('payment.return') }}">
              {{ $langg->lang169 }}
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Area End -->

<section class="tempcart">

@if(!empty($order))

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Starting of Dashboard data-table area -->
                    <div class="content-box section-padding add-product-1">
                              <button class="your-button-class" id="sslczPayBtn"
																	token="if you have any token validation"
																	postdata="your javascript arrays or objects which requires in backend"
																	order="If you already have the transaction generated for current order"
																	endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
															</button>
                    </div>
                </div>
            </div>
        </div>
@endif
</section>

@endsection

@section('scripts')
<script type="text/javascript">
    // var obj = {};
    // obj.cus_name = 'manik';
    // obj.cus_phone = '01714537155';
    // obj.cus_email = 'manik08cse@gmail.com';
    // obj.cus_addr1 = 'dhaka';
    // obj.amount = '130';

    var obj = {};
    obj.cus_name = "{{$order->customer_name}}";
    obj.cus_phone = "{{$order->customer_phone}}";
    obj.cus_email = "{{$order->customer_email}}";
    obj.cus_addr1 = "{{$order->customer_address}}";
    obj.amount = "{{$order->pay_amount}}";
    obj.order_number = "{{$order->order_number}}";
    console.log(obj);
    $('#sslczPayBtn').prop('postdata', obj);
</script>
@endsection