<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100)->unique();
            $table->string('Stazione_di_partenza', 6)->unique();
            $table->string('Stazione_di_arrivo', 6)->unique();
            $table->string('Orario_di_partenza', 8);
            $table->string('Orario_di_arrivo', 8);
            $table->string('Codice_treno');
            $table->unsignedtinyInteger('Numero_carrozze');
            $table->unsignedtinyInteger('In_orario');
            $table->unsignedtinyInteger('Cancellato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
