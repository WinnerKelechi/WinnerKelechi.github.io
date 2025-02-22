<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            
            
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->Text('company_name');
            $table->mediumText('company_address')->nullable();
            $table->string('company_email')->nullable();
            $table->bigInteger('company_phone')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('staff_strength');
            $table->string('preferred_mode_of_communication')->nullable();
            $table->string('do_you_have_an_erp')->nullable();
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
        Schema::dropIfExists('forms');
    }
}