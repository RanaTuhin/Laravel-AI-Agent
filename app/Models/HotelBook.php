<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelBook extends Model
{
    protected function casts(): array
    {
        return [
            'amenities' => 'array',
            'images' => 'array',
        ];
    }
}
