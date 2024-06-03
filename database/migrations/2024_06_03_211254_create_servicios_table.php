<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('equipo_id');
            $table->unsignedBigInteger('tecnico_id');
            $table->date('fecha_recepcion');
            $table->text('problema');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('tecnico_id')->references('id')->on('tecnicos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
