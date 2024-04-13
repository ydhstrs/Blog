<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('landing_page_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('section_number');
            $table->string('title_head');
            $table->text('desc');
            $table->string('subtitle1')->nullable();
            $table->string('subtitle2')->nullable();
            $table->string('subtitle3')->nullable();
            $table->text('desc1')->nullable();
            $table->text('desc2')->nullable();
            $table->text('desc3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_page_contents');
    }
};
