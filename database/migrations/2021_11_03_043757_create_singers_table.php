<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->string('singer_code')->primary();
            $table->string('singer_name');
            $table->integer('debut_on')->nullable();
            $table->string('origin')->nullable();
            $table->string('genre')->nullable();
            $table->string('record_label')->nullable();
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
        Schema::dropIfExists('singers');
    }
}
