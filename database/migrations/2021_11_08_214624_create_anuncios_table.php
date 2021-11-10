<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->string('asunto');
            $table->string('precio');
            $table->timestamps();
        });
        Schema::table('anuncios', function (Blueprint $table) {
            $table->unsignedBigInteger("pro_id_user");
            $table->foreign("pro_id_user")->references("id")->on("users");
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncios');
    }
}
