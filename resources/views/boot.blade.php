<?php


//setting up braintree credentials.
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('2yw4qvsvxcr5fhyx');
Braintree_Configuration::publicKey('j2cqsvvdjnvs2v5w');
Braintree_Configuration::privateKey('9605f4859f57d23d0ee40cedb88c834e');

//Booting done.

//Token braintree
echo json_encode(Braintree_ClientToken::generate());
