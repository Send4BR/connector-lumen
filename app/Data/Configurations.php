<?php
namespace App\Data;

class Configurations
{
    const listAllConfigs = [
        "name" => "Shopify",
        "description" => "This is a Shopify connector.",
        "image_url" => "https://foo.bar/img/logo.png",
        "custom_fields" => [
            [
                "key" => "username",
                "label" => "Ecommerce login"
            ],
            [
                "key" => "password",
                "label" => "Ecommerce password"
            ]
        ],
        "default_statuses" => [
            "delivered"
        ],
        "default_wiretransfer_methods" => [
            "wire-transfer"
        ],
        "pay_refund_method" => "voucher"
    ];
}
