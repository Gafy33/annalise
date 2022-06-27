<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('information_users', function (Blueprint $table) {
            $table->string('numero_tva')->nullable();
            $table->string('poste')->nullable();
            $table->string('service')->nullable();
            $table->string('pays')->nullable();
            $table->string('fusee_horaire')->nullable();
            $table->string('mode_de_payement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('information_users', function (Blueprint $table) {
            //
        });
    }
}
