<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id', 'name', 'description', 'price', 'notes',
        'status', 'quantity', 'sku',
        'field_a', 'field_b', 'field_c', 'field_d',
        'field_e', 'field_f', 'field_g', 'field_h',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
