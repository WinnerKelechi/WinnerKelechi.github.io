<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->Text('company_name')->nullable();
            $table->string('industry_of_business')->nullable();
            $table->string('location')->nullable();
            $table->string('how_did_you_hear')->nullable();
            $table->string('bank_name')->nullable();
            $table->bigInteger('bank_account_number')->nullable();
            $table->string('means_of_identification')->nullable();
            $table->bigInteger('identification_number')->nullable();
            $table->string('rytegate_partnership_agreement')->nullable();
            $table->date('agreement_date')->nullable();
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
        Schema::dropIfExists('partner_forms');
    }
}
