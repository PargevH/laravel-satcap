<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactus', function (Blueprint $table) {
         $table->increments('id');
         $table->string('firstName');
         $table->string('lastName');
         $table->string('email');
         $table->string('phone');
         $table->string('companyName');
         $table->string('accredited');
         $table->text('message');
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
        Schema::drop("contactus");
    }
}