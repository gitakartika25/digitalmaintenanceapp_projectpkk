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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            // $table->primary(['id', 'transaction_id','customer_id']);
            // $table->unsignedBigInteger('id');
            // $table->foreignId('transaction_id')->constrained('transactions');
            // $table->foreignId('customer_id')->references('id')->on('users');
            // $table->foreignId('employe_id')->nullable()->constrained('users');
            // $table->string('note');

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
        Schema::dropIfExists('transaction_details');
    }
};
