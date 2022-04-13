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
        Schema::create('poems', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->text('description');
            $table->integer('verses_count');
            $table->unsignedBigInteger('poet_id');
            $table->foreign('poet_id')->references('id')->on('poets')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('poetic_type_id');
            $table->foreign('poetic_type_id')->references('id')->on('poetic_types')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('poems');
    }
};
