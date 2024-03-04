<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('nama');
            $table->foreignId('id_kategori')
                ->references('id')
                ->on('kategori')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('harga');   
            $table->foreignId('id_bahan')
                ->nullable()
                ->references('id')
                ->on('bahan')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->boolean('ketersediaan');
            $table->timestamps(); // Created_at and updated_at columns

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::dropIfExists('menu');
    }
}
