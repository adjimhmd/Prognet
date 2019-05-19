<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryDetail extends Model
{
    use Notifiable;

    protected $table = 'product_category_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'category_id', 'created_at', 'updated_at',
    ];
}
