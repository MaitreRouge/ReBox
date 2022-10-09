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
        Schema::create('items', function (Blueprint $table) {
            $table->string("id", 8)->unique();
            $table->string("name", 128);
            $table->string("domain", 128);
            $table->string("source", 128);
            $table->string("owner_id", 8);
            $table->set("type", ["redirection", "document", "file"]);
            $table->set("status", ["online", "limit_reached", "disabled", "offline"]);
            $table->integer("protected")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
