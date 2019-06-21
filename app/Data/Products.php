<?php
namespace App\Data;

class Products
{
    const variants = [
        "skus" => [
            [
                "sku" => "T123REDS",
                "name" => "Small Red T-Shirt",
                "image" => "https://foo.bar/product-img/T123REDS.jpeg",
                "grid" => [
                    "Color" => "red",
                    "Size" => "s"
                ]
            ],
            [
                "sku" => "T123REDM",
                "name" => "Medium Red T-Shirt",
                "image" => "https://foo.bar/product-img/T123REDM.jpeg",
                "grid" => [
                    "Color" => "red",
                    "Size" => "m"
                ]
            ],
            [
                "sku" => "T123REDL",
                "name" => "Large Red T-Shirt",
                "image" => "https://foo.bar/product-img/T123REDL.jpeg",
                "grid" => [
                    "Color" => "red",
                    "Size" => "l"
                ]
            ],
            [
                "sku" => "T123BLUEM",
                "name" => "Medium Blue T-Shirt",
                "image" => "https://foo.bar/product-img/T123BLUEM.jpeg",
                "grid" => [
                    "Color" => "blue",
                    "Size" => "m"
                ]
            ]
        ]
    ];
}
