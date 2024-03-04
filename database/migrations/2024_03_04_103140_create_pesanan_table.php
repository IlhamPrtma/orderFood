<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            // $table->unsignedBigInteger('id_meja'); // Foreign key reference to "meja" table
            $table->foreignId('id_meja')
                ->references('id')
                ->on('meja')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            // $table->unsignedBigInteger('id_detail_menu'); // Foreign key reference to "detail_menu" table
            $table->foreignId('id_detail_menu')
                ->references('id')
                ->on('detail_menu')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('nama_pemesan');
            $table->float('pembayaran');
            $table->string('metode');
            $table->string('status');
            $table->timestamps(); // Created_at and updated_at columns

            // Define foreign key constraints
            // $table->foreign('id_meja')->references('id')->on('meja');
            // $table->foreign('id_detail_menu')->references('id')->on('detail_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('pesanan', function (Blueprint $table) {
        //     // Drop the foreign key constraints
        //     $table->dropForeign(['id_meja']);
        //     $table->dropForeign(['id_detail_menu']);
        // });

        Schema::dropIfExists('pesanan');
    }
}
