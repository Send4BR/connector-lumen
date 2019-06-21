<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->post('/refunds/pay', 'RefundController@newPayment');

$app->get('/connector', 'ConfigurationController@getConfigs');

$app->get('/products/{id}/variations', 'ProductController@getAllVariations');

$app->get('/orders/statuses', 'OrderController@getStatuses');
$app->get('/orders/{id}', 'OrderController@getAll');
