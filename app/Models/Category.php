<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var array
     */
    protected $fillabe = [
        'name',
        'image'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}