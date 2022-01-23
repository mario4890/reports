<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->hasOne(ProductGroup::class, 'id', 'product_group_id');
    }
}
