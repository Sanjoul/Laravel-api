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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_name');
            $table->unsignedBigInteger('pagename_id');
            $table->string('section_type');
            $table->unsignedBigInteger('content_id');
            $table->timestamps();
            $table->foreign('pagename_id')->references('id')->on('pages')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('content_id')->references('content_id')->on('contents')->restrictOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
