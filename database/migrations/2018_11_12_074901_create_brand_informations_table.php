<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('brand_name',50);
            $table->string('brand_url',50)->unique();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('state_or_province',10);
            $table->string('country',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_informations');
    }
}
