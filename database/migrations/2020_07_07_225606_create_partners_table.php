<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id')->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone_no', 20)->unique();
            $table->string('alternate_no', 20)->unique();
            $table->string('email', 100)->unique();
            $table->string('occupation', 50);
            $table->string('address');
            $table->integer('means_of_identification');
            $table->string('identification_number');
            $table->string('bank');
            $table->integer('account_no')->unique();
            $table->date('acceptance_date');
            $table->string('gender', 10);
            $table->string('image_path')->nullable();
            $table->date('dob');
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
        Schema::dropIfExists('partners');
    }
}
