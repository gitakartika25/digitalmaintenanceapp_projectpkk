<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->date('rent_date');
            $table->date('return_date');
            $table->string('payment_status');
            $table->string('token');
            $table->timestamps();

            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('customer_id')->references('id')->on('users');
            $table->foreignId('employe_id')->nullable()->constrained('users');
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
};
