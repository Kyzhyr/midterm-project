<?php

namespace src;

class Product {
  public string $product_name;
  public int $price;
  public int $quantity;

  public function __construct(string $product_name, int $price, int $quantity) {
    $this->product_name = $product_name;
    $this->price = $price;
    $this->quantity = $quantity;
  }
}

class Sales {
  public string $buyer;
  public Product $product;

  public function __construct(string $product_name, string $buyer, int $price, int $quantity) {
    $this->buyer = $buyer;
    $this->product = new Product($product_name, $price, $quantity);
  }
}
