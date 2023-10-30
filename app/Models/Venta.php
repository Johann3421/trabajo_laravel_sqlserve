<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $producto_id
 * @property $cantidad
 * @property $fecha_venta
 * @property $precio_unitario
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'cantidad' => 'required',
		'fecha_venta' => 'required',
		'precio_unitario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','cantidad','fecha_venta','precio_unitario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Producto::class);
    }
    public function users()
{
    return $this->belongsToMany(User::class, 'usp', 'venta_id', 'user_id');
}

public function products()
{
    return $this->belongsToMany(Product::class, 'usp', 'venta_id', 'product_id');
}

    

}
