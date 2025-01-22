<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'product_image',
        'category_id',
        'application_id',
        'price',
        'is_deleted'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function application()
    {
        return $this->hasMany(Application::class, 'product_id', 'application_id');
    }
}
