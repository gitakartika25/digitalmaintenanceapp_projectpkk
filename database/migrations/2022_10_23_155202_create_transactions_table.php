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
            // $table->unsignedBigInteger('employee_id');
            // $table->unsignedBigInteger('customer_id');
            $table->integer('quantity');
            $table->date('rent_date');
            $table->date('return_date');
            $table->string('status');
            $table->string('token');
            $table->timestamps();

            $table->foreignId('product_id')->constrained('products');
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
