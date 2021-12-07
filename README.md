# Stripe-Subscription-Payment-Integration-in-PHP
Stripe subscription payment with PHP - Integrate recurring payment with Stripe API using PHP. Example script to integrate Stripe subscription payment in PHP with Stripe API.

The Stripe Subscription API provides an easy way to integrate recurring payments on the website. If you want to implement the membership subscription system on the web application, subscription payment is required for recurring billing. The Stripe payment gateway helps to integrate recurring payment with Plans and Subscription API. Stripe subscription is a quick and effective way to allow your website members to purchase a membership online using their credit card.

In Stripe subscription payment, the buyer is charged recurringly based on the specific interval. The member of your website can subscribe to a plan and make payment with their credit/debit card without leaving the website. In this tutorial, we will show you how to integrate Stripe subscription payment using PHP.

In the example script, we will implement the following functionality to accept payment for a subscription via [Stripe Payment Gateway in PHP](https://www.pakainfo.com/stripe-payment-gateway-integration-in-php-with-demo-examples/).

## Create an HTML form to select a subscription plan and provide credit card information.

Create Stripe token to securely transmit card information.
Submit the form with plan and card details.
Verify the card and create a subscription plan with Stripe API.
Store transaction data with subscription plan info in the database.
Before getting started to integrate Stripe Subscription payment API in PHP, take a look at the file structure.

stripe_subscription_payment_php/
├── config.php
├── dbConnect.php
├── index.php
├── payment.php
├── stripe-php/
└── css/
    └── style.css
    
## Stripe Test API Keys

Before making the Stripe subscription payment gateway live, it needs to be checked whether the subscription process is working properly. You need the test API keys data to check the subscription payment process.

Login to your Stripe account and navigate to the Developers » API keys page.
In the TEST DATA block, you’ll see the API keys (Publishable key and Secret key) are listed under the Standard keys section. To show the Secret key, click on the Reveal test key token button.    

Collect the Publishable key and Secret key to use later in the script.

## Make Stripe Payment Gateway Live

Once the subscription API integration is completed and the payment process is working properly, follow the below steps to make Stripe payment gateway live.

Login to your Stripe account and navigate to the Developers » API keys page.
Collect the API keys (Publishable key and Secret key) from the LIVE DATA section.
In the config.php file, replace the Test API keys (Publishable key and Secret key) by the Live API keys (Publishable key and Secret key).
