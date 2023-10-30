<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usp
 *
 * @property $id
 * @property $user_id
 * @property $venta_id
 * @property $producto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @property User $user
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usp extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'venta_id' => 'required',
		'producto_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','venta_id','producto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'venta_id');
    }
    

}
