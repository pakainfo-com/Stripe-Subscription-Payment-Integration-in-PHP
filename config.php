<?php 
// Subscription plans 
// Minimum amount is $0.50 US 
// Interval day, week, month or year 
$plans = array( 
    '1' => array( 
        'name' => 'Weekly Subscription', 
        'price' => 25, 
        'interval' => 'week' 
    ), 
    '2' => array( 
        'name' => 'Monthly Subscription', 
        'price' => 85, 
        'interval' => 'month' 
    ), 
    '3' => array( 
        'name' => 'Yearly Subscription', 
        'price' => 950, 
        'interval' => 'year' 
    ) 
); 
$currency = "USD";  
 
/* Stripe API configuration 
 * Remember to switch to your live publishable and secret key in production! 
 * See your keys here: https://dashboard.stripe.com/account/apikeys 
 */ 
define('STRIPE_API_KEY', 'Your_API_Secret_key'); 
define('STRIPE_PUBLISHABLE_KEY', 'Your_API_Publishable_key'); 
  
// Database configuration  
define('DB_HOST', 'MySQL_Database_Host'); 
define('DB_USERNAME', 'MySQL_Database_Username'); 
define('DB_PASSWORD', 'MySQL_Database_Password'); 
define('DB_NAME', 'MySQL_Database_Name');
