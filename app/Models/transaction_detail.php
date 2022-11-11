<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'transaction_details';
    use HasFactory;

    
    public function product(){

        return $this ->belongsTo(Product::class, 'products_id');
    }

}
