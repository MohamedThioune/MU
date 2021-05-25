@php
  // Define the gateway to obtain the necessary token for the next transaction
  $gateway = new Braintree\Gateway([
      'environment' => 'sandbox',
      'merchantId' => '2yw4qvsvxcr5fhyx',
      'publicKey' => 'j2cqsvvdjnvs2v5w',
      'privateKey' => '9605f4859f57d23d0ee40cedb88c834e'
  ]);
@endphp

<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SMUUSE | FACTURATION</title>
      <script src="https://kit.fontawesome.com/2def424b14.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.gstatic.com"> 
      <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">


    </head>
<body style="font-family: 'Source Sans Pro', sans-serif;">

    <br>
    <div class="wrapper">
        <div class="checkout container card shadow-none p-3 mb-5 bg-light rounded" style="width:50%">

        <div class="card-body">
            <div class="card-title"> <img src="{{ asset('img/logo-MU.png') }}" width="20" height="20" alt=""> SMUUSE <br>
                <h2><strong>Take my money <br>No need talks !</strong></h2>
                <p>
                    Make a test payment using PayPal or a card, alternatively you can pay also with ApplePay, SamsungPay and much more ...
                </p>
            </div>
            @include('flash::message')
            <form method="post" id="payment-form" action="">
                @csrf
                <section>
                    <label for="amount">
                        <!-- <span class="input-label">Amount</span> -->
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="hidden" min="6" value="{{session('amount')}}">
                        </div>
                    </label>

                    <div class="bt-drop-in-wrapper">
                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button btn btn-info" type="submit"><span style="font-weight:bold">Let's go</span></button>
                <a href="{{route('tarif')}}" class="btn btn-danger float-right" ><span style="font-weight:bold">Retour</span></a><br><br>
                <span style="font-size:0.7em; color:red; font-weight:bold">*This is done as a test measure no withdrawals will be made from your bank account 
                <br>"The transactions are only linked to the SandBox pattern" </span>
            </form>
        </div>
        </div>
    </div>

    <script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "<?php echo($gateway->ClientToken()->generate()); ?>";

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          paypal: {
            flow: 'checkout',
            amount: '<?php echo session('amount') ?>',
            currency: 'USD'
          }
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          form.addEventListener('submit', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
              if (err) {
                console.log('Request Payment Method Error', err);
                return;
              }

              // Add the nonce to the form and submit
              document.querySelector('#nonce').value = payload.nonce;
              form.submit();
            });
          });
        });
    </script>
    <script src="javascript/demo.js"></script>
</body>
</html>