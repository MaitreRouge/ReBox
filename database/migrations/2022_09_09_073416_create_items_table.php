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
            $table->id();
            $table->id("owner_id");
            $table->set("type", ["rediction", "document", "file"]);
            $table->set("status", ["online", "limit_reached", "disabled", "offline"]);
            $table->string("endpoint");
            $table->integer("protected")->default(0);
            $table->string("password")->nullable();
            $table->text("discord_users")->nullable();
            $table->text("rebox_users")->nullable();
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
