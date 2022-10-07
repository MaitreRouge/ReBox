<?php

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
        Schema::create('protections', function (Blueprint $table) {
            $table->string("ressource_id", 8)->unique();
            $table->string("password")->nullable();
            $table->integer("limit")->nullable();
            //TODO: Add users protection
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protections');
    }
};
