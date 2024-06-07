<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compostas', function (Blueprint $table) {
            $table->id('idProductor');
            $table->string('campo_adicional_1'); // Agrega otros campos según tus necesidades
            $table->string('campo_adicional_2'); // Agrega otros campos según tus necesidades
            $table->timestamps();

            // Añadir la clave foránea que referencia a la tabla 'beneficiarios'
            $table->foreign('idProductor')->references('id')->on('beneficiarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compostas');
    }
}