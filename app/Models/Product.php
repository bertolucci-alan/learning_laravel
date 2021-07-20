<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var array
     */
    protected $fillabe = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}