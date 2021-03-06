<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelPosTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_pos_transactions', function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('billable');
            $table->string('order_id')->unique();
            $table->string('transaction_id')->nullable();
            $table->string('masked_credit_card');
            $table->string('card_brand')->nullable();
            $table->string('amount');
            $table->integer('installment');
            $table->string('currency', 3);
            $table->tinyInteger('status');
            $table->tinyInteger('error_code')->nullable();
            $table->dateTime('paid_at')->nullable();
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
        Schema::dropIfExists('laravel_pos_transactions');
    }
}
