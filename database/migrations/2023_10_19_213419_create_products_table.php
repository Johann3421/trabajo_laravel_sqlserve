<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del Producto
            $table->string('description'); // Descripción del Producto
            $table->integer('stock'); // Existencias
            $table->decimal('price', 10, 2); // Precio (10 dígitos, 2 decimales)
            $table->string('category'); // Categoría
            $table->string('provider'); // Proveedor
            $table->timestamp('created_at')->useCurrent(); // Fecha de Creación
            $table->timestamp('updated_at')->useCurrent(); // Fecha de Actualización
            $table->string('image_path')->nullable(); // Ruta de la imagen (puedes guardar la ruta en lugar de la imagen en la base de datos)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
