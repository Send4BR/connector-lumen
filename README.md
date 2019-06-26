# Send4 Mock Connector

This is a project built by the [Send4](https://www.troquefacil.com.br/) team with [Lumen](https://lumen.laravel.com/). Its main objective is to serve as an example to facilitate the development of future integrations with platforms not yet used by our products.

## Install Lumen and Run Migrations

Lumen utilizes Composer to manage its dependcies. To install the required libraries listed in the `composer.json` file, run the following commands: 

```
# install the libraries listed in the composer.json file
composer install

 # start the api using artisan
 php artisan serve
```

## Avaliable endpoints

```
# GET - returns connector data.
/connector

# GET - returns order info.
/orders/{id}?confirmation={email}

# GET - returns avaliable statuses.
/orders/statuses

# GET - returns different values from a product grid.
/products/{id}/variations?product_sku={product_sku_id}

# POST - register a new payment.
/refunds/pay
```

## Examples
At the root of this project its avaliable a file named `mock-connector.postman_collection.json`, with him you can import at the [Postman](https://www.getpostman.com/) software to help you better understanding how manage your data.
