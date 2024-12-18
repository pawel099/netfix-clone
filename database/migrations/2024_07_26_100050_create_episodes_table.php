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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            
            
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('overview')->nullable();
            $table->string('poster_path');
            $table->string('backdrop_path')->nullable();
            $table->date('realase_date')->nullable();
            $table->string('trailer_url')->nullable();
            $table->string('video_ur');
            $table->integer('view_count')->default(0);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
