<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billingfirstname')->nullable();
            $table->string('billinglastname')->nullable();
            $table->string('billingaddress1')->nullable();
            $table->string('billingaddress2')->nullable();
            $table->string('country')->nullable();
            $table->string('billingtown')->nullable();
            $table->string('billingstate')->nullable();
            $table->string('billingpostcode')->nullable();
            $table->string('billingemail')->nullable();
            $table->string('billingmobile')->nullable();

            $table->string('shippingfirstname')->nullable();
            $table->string('shippinglastname')->nullable();
            $table->string('company')->nullable();
            $table->string('shippingaddress1')->nullable();
            $table->string('shippingaddress2')->nullable();
            $table->string('shippingtown')->nullable();
            $table->string('shippingstate')->nullable();
            $table->string('shippingpostcode')->nullable();
            $table->string('shippingemail')->nullable();
            $table->string('shippingmobile')->nullable();


            $table->string('transaction_id')->nullable();
            $table->integer('user_id')->default(0);
            $table->integer('total')->default(0);
            $table->string('receipt_url')->nullable();

            
            $table->boolean('confirmed')->default(false);



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
        Schema::dropIfExists('orders');
    }
}
