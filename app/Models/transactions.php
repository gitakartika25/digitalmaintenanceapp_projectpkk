<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $guarded = ['id'];
    use HasFactory;


    public function product(){

        return $this ->belongsTo(Product::class, 'products_id');
    }
 
    public function transaction_detail(){

        return $this ->belongsTo(transaction_detail::class, 'transactions_id');
    }

}
