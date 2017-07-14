<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_category_id')->index();
            $table->string('name');
            $table->string('address');
            $table->string('town');
            $table->string('city');
            $table->string('post_code');
            $table->string('zip');
            $table->string('country');
            $table->string('phone');
            $table->string('fax');
            $table->string('website');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
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
        Schema::dropIfExists('companies');
    }
}
