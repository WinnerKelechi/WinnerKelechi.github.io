<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->bigInteger('license_type_id');
            $table->mediumText('address', 500);
            $table->string('transaction_ref')->nullable();
            $table->bigInteger('amount')->unsigned()->comment('amount in kobo');
            $table->bigInteger('charges');
            $table->bigInteger('payment_method_id')->unsigned();
            $table->string('status')->nullable();
            $table->string('status_code', 5)->nullable();
            $table->string('payment_ref')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('response_code')->nullable();
            $table->string('response_description')->nullable();
            $table->string('gateway_response')->nullable();
            $table->string('bank')->nullable();
            $table->mediumText('details')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
