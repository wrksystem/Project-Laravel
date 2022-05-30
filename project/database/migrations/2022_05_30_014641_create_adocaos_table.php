<?php

use App\Models\Pets;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocaos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('proof_of_address');
            $table->string('income_value');
            $table->string('proof_of_value');
            $table->timestamps();
            $table->bigInteger('fkadocao');
            $table->foreignIdFor(User::class, 'fkuser')->constrained('users');
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
        Schema::dropIfExists('adocaos');
    }
}
