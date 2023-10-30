<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $description
 * @property $stock
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'description' => 'required',
		'stock' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','stock','price'];
    public function users()
{
    return $this->belongsToMany(User::class, 'usp', 'product_id', 'user_id');
}

public function ventas()
{
    return $this->belongsToMany(Venta::class, 'usp', 'product_id', 'venta_id');
}




}
