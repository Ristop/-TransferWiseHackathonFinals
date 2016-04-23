<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['wallet_id', 'source', 'target', 'sourceAmount', 'targetAmount', 'rate', 'fee'];
}
