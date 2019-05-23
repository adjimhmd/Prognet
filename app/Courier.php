<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Courier extends Model
{
    use Notifiable;

    protected $table = 'couriers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'courier', 'created_at', 'updated_at',
    ];
}
