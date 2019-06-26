<?php
namespace App\Data;

class Orders
{
    const listAllOrders = [
        "id" => "O-123456",
        "invoice_number" => "745236",
        "shipped_at" => "2019-06-01 10:00:00",
        "delivered_at" => "2019-06-05 15:00:00",
        "currency" => "BRL",
        "value" => 300,
        "shipping_value" => 30,
        "payment_methods" => [
            "credit-card"
        ],
        "status" => "delivered",
        "is_marketplace" => true,
        "marketplace_name" => "Amazon",
        "customer" => [
            "id" => "123",
            "email" => "test@test.com.br",
            "first_name" => "Michael",
            "last_name" => "Jordan",
            "gender" => "male",
            "phone" => "5541199999999",
            "document" => "99999999999",
            "address" => [
                "zip_code" => "94103",
                "address" => "Mission St",
                "number" => "814",
                "neighborhood" => "South of Market",
                "city" => "San Francisco",
                "state" => "CA",
                "country" => "USA",
                "complement" => null
            ]
        ],
        "products" => [
            [
                "id" => "29791690",
                "name" => "Foo T-shirt",
                "sku" => "42EVZR5ZP",
                "qty" => 3,
                "price" => 70,
                "selling_price" => 60,
                "weight" => 0.6,
                "categories" => [
                    "male",
                    "summer-collection",
                    "t-shirts"
                ],
                "image_url" => "https://foo.bar/product-img/29791690.jpeg"
            ],
            [
                "id" => "29791771",
                "name" => "Coffee Mug",
                "sku" => "ZPWES3JJP",
                "qty" => 1,
                "price" => 130,
                "selling_price" => 120,
                "weight" => 0.6,
                "categories" => [
                    "hot-deals",
                    "mugs"
                ],
                "image_url" => "https://foo.bar/product-img/29791771.jpeg"
            ]
        ]
    ];

    const statuses = [
        [
            "key" => "paid",
            "description" => "Payment received"
        ],
        [
            "key" => "delivered",
            "description" => "Delivered to customer"
        ]
    ];
}
