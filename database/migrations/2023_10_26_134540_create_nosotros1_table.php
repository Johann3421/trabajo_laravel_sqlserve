<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nosotros1', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('stock');
            $table->decimal('price',10,2);
            $table->unsignedBigInteger('product_id'); // Añadimos una columna para la clave foránea

            // Definimos la restricción de clave foránea
            $table->foreign('product_id')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nosotros1');
    }
};

