<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('author');
            $table->string('recording');
            $table->string('presentation');
            $table->string('repository');
            $table->unsignedBigInteger('extra_resources_id1');
            $table->unsignedBigInteger('extra_resources_id2');
            $table->unsignedBigInteger('extra_resources_id3');
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('extra_resources_id1')->references('id')->on('extra_resources');
            $table->foreign('extra_resources_id2')->references('id')->on('extra_resources');
            $table->foreign('extra_resources_id3')->references('id')->on('extra_resources');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
