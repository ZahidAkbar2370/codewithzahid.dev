<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('language_id');
            $table->string('title');
            $table->string('video_link');
            $table->string('document_url')->nullable();
            $table->string('thumbnail')->default("lecture_thumbnail.png");
            $table->enum('publication_status',[0,1])->default(1); //0 inactive 1 active
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
        Schema::dropIfExists('lectures');
    }
}
