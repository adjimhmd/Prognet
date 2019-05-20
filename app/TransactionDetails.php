<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use Notifiable;

    protected $table = 'transaction_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id', 'product_id', 'qty', 'discount', 'selling_price'
    ];
    /**
     * Get the transaction that owns the transaction detail.
     */
    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
