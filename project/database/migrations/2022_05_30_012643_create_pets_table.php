<?php

use App\Models\Cartao_Vacina;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id_pets');
            $table->string('name');
            $table->integer('weight');
            $table->integer('height');
            $table->string('color');
            $table->string('genre');
            $table->string('image');
            $table->string('age');
            $table->timestamps();
            //$table->foreignIdFor(Cartao_Vacina::class, 'fkcartao_vacina')->constrained('cartao__vacinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
