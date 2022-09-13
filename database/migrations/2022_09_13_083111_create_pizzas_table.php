<?php

use App\Models\Pizza;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id("pizza_id");
            $table->string("name", 32);
            $table->longText("ingredients", 150);
            $table->timestamps();
        });

        Pizza::create(["name"=>"Son-Go-Ku", "ingredients"=>" paradicsom alap, sonka, gomba, kukorica, sajt"]);
        Pizza::create(["name"=>"Pepperóni", "ingredients"=>"paradicsom alap, pepperóni, sajt"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
};
