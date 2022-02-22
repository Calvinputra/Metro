<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionIdToTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('transaction_id')->after('uuid')->nullable();
        });
        \DB::statement("UPDATE transactions SET transaction_id = CONCAT('TR',LPAD(id,7,'0'))");
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('transaction_id')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(('transaction_id'));
        });
    }
}
