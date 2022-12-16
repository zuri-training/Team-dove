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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id('library_id');
            $table->string('title', 50);
            $table->string('description', 255);
            $table->integer('total_downloads')->default('0');
            $table->integer('user_id');
            $table->timestamp('published_at')->useCurrent();
            $table->timestamp('last_modified')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};
