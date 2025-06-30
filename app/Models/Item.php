<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'menucategory_id', 'image','type'];
    protected $table = 'items'; // Specify the table name if it differs from the model name

    public function getImageUrlAttribute()
    {
        return asset('storage/items/' . $this->image);
    }
    public function menuCategory()
    {
        return $this->belongsTo(MenuCategory::class,'menucategory_id');
    }
}
