<?php 
// Product Details 
$itemName = "Demo Product";  
$itemNumber = "PN12345";  
$itemPrice = 25;  
$currency = "USD";  
 
// Authorize.Net API configuration  
define('ANET_API_LOGIN_ID', '85qrDaCL387g');  
define('ANET_TRANSACTION_KEY', '8zSsb9tXP2L839Wk');  
$ANET_ENV = 'SANDBOX'; // or PRODUCTION 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'payments');
?>