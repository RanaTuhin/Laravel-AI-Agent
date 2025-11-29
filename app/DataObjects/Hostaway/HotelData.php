<?php

use Spatie\LaravelData\Data;

class HotelData extends Data
{
     public function __construct(
          public string $name,
          public string $description,
          public float $price,
          public ?string $city
     ) {}
}
