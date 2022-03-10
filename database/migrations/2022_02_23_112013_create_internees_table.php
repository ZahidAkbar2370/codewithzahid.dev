<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateInterneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cnic_no');
            $table->string('mobile_no');
            $table->string('degree_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('password')->default(Hash::make('123456789'));
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
        Schema::dropIfExists('internees');
    }
}
