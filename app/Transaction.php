<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = ['role', 'source', 'target', 'sourceAmount', 'targetAmount', 'rate', 'fee'];
}
