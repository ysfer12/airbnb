<?php

use Core\Http\Router;

// Home & Main Routes
Router::get('', 'front\\PropertyController@displayLatestTen');
Router::get('/', 'front\\PropertyController@displayLatestTen');
Router::get('home', 'front\\HomeController@index');

// Property Routes
Router::get('property', 'front\\PropertyController@displayProperty');
Router::get('property/{id}', 'front\\PropertyController@getPropertyById');
Router::get('property/statistic', 'front\\PropertyController@viewStatistiques');
Router::post('property/search', 'front\\PropertyController@searchProperty');

// Property Management Routes
Router::get('property/add', 'front\\PropertyController@displayAddPage');
Router::post('property/add', 'front\\PropertyController@creatProperty');
Router::get('property/update', 'front\\PropertyController@displayUpdatePage');
Router::post('property/update', 'front\\PropertyController@updateProperty');
Router::get('property/delete', 'front\\PropertyController@deleteProperty');

// Booking Routes
Router::get('booking', 'front\\BookingController@renderBookingView');
Router::post('booking/create', 'front\\BookingController@createBooking');
Router::post('booking/process-payment', 'front\\BookingController@processPayment');
Router::get('booking/success/{id}', 'front\\BookingController@bookingSuccess');
Router::get('booking/download-contract/{id}', 'front\\BookingController@downloadContract');

// Payment Routes
Router::get('payment/process/{booking_id}', 'front\\PaymentController@initializePayment');
Router::get('payment/status/{id}', 'front\\PaymentController@getPaymentStatus');
Router::post('payment/stripe/process', 'front\\PaymentController@processStripePayment');
Router::post('payment/paypal/process', 'front\\PaymentController@processPaypalPayment');
Router::post('payment/refund/{id}', 'front\\PaymentController@processRefund');

// Webhook Routes
Router::post('webhook/stripe', 'front\\PaymentController@handleStripeWebhook');
Router::post('webhook/paypal', 'front\\PaymentController@handlePaypalWebhook');