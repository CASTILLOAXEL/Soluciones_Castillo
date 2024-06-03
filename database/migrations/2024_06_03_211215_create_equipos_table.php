<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marca_id')->constrained('marcas');
            $table->string('modelo');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
