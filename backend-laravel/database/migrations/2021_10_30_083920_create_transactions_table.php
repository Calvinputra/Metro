<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //data di copy ulang dan di ambil text karena data transaksi tidak boleh berubah (untuk invoice)
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->uuid('uuid');

            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->timestamp('date');

            $table->double('weight')->default(1);
            $table->double('total_price')->default(0);
            $table->double('shipping_cost')->default(1);
            $table->double('shipping_multiplier')->default(1);
            $table->double('total_shipping_cost')->default(1);
            $table->double('grand_total')->default(1);
            $table->double('discount')->default(0);

            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('status_id');

            $table->string('shipping_recipient_name');
            $table->string('shipping_recipient_number');
            $table->string('shipping_address');
            $table->string('shipping_postal_code');
            $table->unsignedBigInteger('shipping_country_id');
            $table->unsignedBigInteger('shipping_province_id');
            $table->unsignedBigInteger('shipping_city_id');

            $table->foreign('shipping_country_id')->references('id')->on('countries');
            $table->foreign('shipping_province_id')->references('id')->on('provinces');
            $table->foreign('shipping_city_id')->references('id')->on('cities');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('transaction_statuses');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
