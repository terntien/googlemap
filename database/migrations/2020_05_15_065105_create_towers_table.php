<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('towers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tower_img');
            $table->string('tower_sending');
            $table->string('tower_typeleaf');
            $table->string('tower_parish');
            $table->string('tower_district');
            $table->string('tower_pravince');
            $table->string('tower_code');
            $table->string('LATDEG');
            $table->string('LONGDEG');
            $table->string('tower_customer');
            $table->string('tower_network');
            $table->string('tower_license_code');
            $table->string('tower_license_date');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('towers');
    }
}
