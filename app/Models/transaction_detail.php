<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    protected $table = 'transaction_details';
    protected $guarded = ['id'];
    public function product(){

        return $this ->belongsTo(Product::class, 'products_id');
    }
}
