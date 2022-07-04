<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawal_slips', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('document_series_no');
            $table->string('qr_no');
            $table->string('pallet_no');
            $table->string('warehouse');
            $table->string('wh_location');
            $table->string('prepared_by');
            $table->string('approved_by');
            $table->string('release_by');
            $table->string('customer_date');
            $table->string('sales_admin');
            $table->string('wh_incharge');
            $table->boolean('status'); //Publish or Draft
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
        Schema::dropIfExists('withdrawal_slips');
    }
}
