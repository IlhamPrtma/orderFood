<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_menu', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->foreignId('id_menu')
                ->references('id')
                ->on('menu')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('harga');   
            $table->integer('kuantitas');
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

        Schema::dropIfExists('detail_menu');
    }
}
