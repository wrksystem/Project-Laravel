<?php

use App\Models\Adocao;
use App\Models\Pets;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartaoVacinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartao__vacinas', function (Blueprint $table) {
            $table->id();
            $table->string('name_vaccine');
            $table->date('data');
            $table->string('age');
            $table->string('dose');
            $table->timestamps();
            $table->foreignIdFor(Pets::class,'fkpets')->constrained('pets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartao__vacinas');
    }
}
