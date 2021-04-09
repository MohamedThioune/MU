@extends('layouts.sidbarNavigation')
<head>
    @section('css')
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/mu-dev.webflow.css">
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" type="text/css" href="../css/video.css" />
    <title>MU | Invoice</title>
    <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- braintree -->
    <script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>    
    <!-- setting up braintree -->
    @php 
        $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => '2yw4qvsvxcr5fhyx',
        'publicKey' => 'j2cqsvvdjnvs2v5w',
        'privateKey' => '9605f4859f57d23d0ee40cedb88c834e'
        ]);

        $clientToken = $gateway->clientToken()->generate();
    @endphp
    
    <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: '{{$clientToken}}',
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
          // Submit payload.nonce to your server
        });
      });
    });
  </script>

    @php if(isset($_COOKIE['lang'])) App::setLocale($_COOKIE['lang']); @endphp

    @endsection
</head>
<body >
@section('content-play-element')
<div style="border: 1px solid grey; margin-left:20%; margin-top:20px; padding:10px;">
    <form action="{{route('payment')}}" method="post" class="payment-form">
        @csrf
        @include('adminlte-templates::common.errors')
        <div class="div-block-261">
                <div class="div-block-262">
                    <div class="div-block-265">
                        <p class="text-publication-immediat">{{__('Take my money , no need talk')}} :</p>
                    </div>
                    <div class="div-block-263">
                        <div>
                            <div class="text-block-279">{{__('Name')}} :</div>
                            <div>
                               <input class="text-block-277" id="date" type="text" name="name">
                            </div>
                        </div>
                        
                       <div>
                            <div class="text-block-278">{{__('Amount')}} (USD Dollars) :</div>
                            <div>
                                <input class="text-block-277" id="date" type="number" name="amount">
                            </div>
                        </div>  

                            <!-- <div> 
                                <div class="text-block-279">{{__('Credit Card Number')}} :</div>
                                <div>
                                    <input class="text-block-277" id="date" type="text" name="creditCardNumber">
                                </div>
                            </div>

                            <div> -->
                                <!-- <div class="text-block-279">{{__('Expiration Date')}} :</div>
                                <div>
                                    <input class="text-block-277" id="date" type="text" name="expirationDate">
                                </div>
                            </div> -->
                        </div>

                        <input class="text-block-277" id="date" type="hidden" name="clientToken" value="{{$clientToken}}">

                        <div id="dropin-container"></div>

                    </div>
                    <button type="submit" style="margin-left:5%" id="submit-button" class="button-14 w-button">{{__('Approve')}}</button>
                </div>
            </div>
    </form>
    @php var_dump($_POST); @endphp
</div>

@endsection

@php
if($_POST){
    try {

        $result = $gateway->transaction()->sale([
        'amount' => $_POST['amount'],
        'paymentMethodNonce' => $_POST['payment_method_nonce'],
        'customer' => ['firstName' => $_POST['name']],
        'options' => [
            'submitForSettlement' => True
        ]
        ]);
    } 
    catch (Braintree\Exception\Connection $e) {
            echo $e->getMessage();
        }

    if ($result->success === true) {
        // See $result->transaction for details
        echo "<div style='margin-top:20%' class='alert alert-success' role='alert'> Transaction sucessfully done ! </div>";
        var_dump($_POST); 
    } 
    else {
        echo "<div style='margin-top:20%' class='alert alert-danger' role='alert'> Error occured $result->errors &#x1F534;. </div>";
    }

}
@endphp

</body>

