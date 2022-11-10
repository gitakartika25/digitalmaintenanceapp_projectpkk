<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public function transactions(){

        return $this ->hasMany(transactions::class, 'transactions_id');
    }
 
    public function transaction_detail(){

        return $this ->hasMany(transaction_detail::class, 'transactions_detail_id');
    }

}
