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
    
  public static $rules = [
    'name' => 'required', // Agregamos la regla para el nombre
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
    protected $fillable = [
      'name',
      'description',
      'stock',
      'price',
      'category',
      'provider',
      'image_path',
  ];



}
