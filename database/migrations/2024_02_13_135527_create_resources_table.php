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
            $table->unsignedBigInteger('extra_resource_id1')->nullable();
            $table->unsignedBigInteger('extra_resource_id2')->nullable();
            $table->unsignedBigInteger('extra_resource_id3')->nullable();

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('extra_resource_id1')->references('id')->on('extra_resources')->onDelete('set null');
            $table->foreign('extra_resource_id2')->references('id')->on('extra_resources')->onDelete('set null');
            $table->foreign('extra_resource_id3')->references('id')->on('extra_resources')->onDelete('set null');
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
