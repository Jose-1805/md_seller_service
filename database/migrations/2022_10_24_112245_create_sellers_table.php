<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->uuid('id')->unique()->comment('Identificador único de cada registro');
            $table->uuid('user_id')->unique()->comment('Identificador único del usuario asociado al vendedor');
            $table->enum('online', ['0', '1'])->comment('Determina si el vendedor está en línea para recibir y enviar mensajes (1 => Online, 0 => Offline)');
            $table->integer('queued_messages')->default(0)->comment('Cantidad actual de mensajes sin contestar que tiene el vendedor');
            $table->integer('max_queued_messages')->comment('Cantidad máxima de mensajes pendientes que puede tener un vendedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
