<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productos_id')->nullable();
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('subtotal');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at')->nullable(true);

            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventas');
    }
}
