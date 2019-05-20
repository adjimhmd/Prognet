<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use Notifiable;

    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timeout', 'address', 'regency', 'province', 'total', 'shipping_cost', 'sub_total', 'user_id', 'courier_id', 'proof_of_payment', 'status'
    ];
    /**
     * Get the transaction_details for the transaction.
     */
    public function transaction_details()
    {
        return $this->hasMany('App\TransactionDetails');
    }
}
