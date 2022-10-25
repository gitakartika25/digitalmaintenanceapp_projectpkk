<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = ['product_name', 'description','price','stock','specification','packaging','material','image','category_id'];

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }

}
