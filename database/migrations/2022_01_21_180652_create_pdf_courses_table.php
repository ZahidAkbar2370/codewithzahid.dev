<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('language_id')->nullable();
            $table->string('book_name');
            $table->string('author_name')->nullable();
            $table->string('publisher_name')->nullable();
            $table->string('edition')->nullable();
            $table->string('book_url')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('pdf_courses');
    }
}
