<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('haji_account_datas', function (Blueprint $table) {
            $table->id();
            $table->string('created_name');
            $table->unsignedBigInteger('created_id');
            $table->foreign('created_id')->references('id')->on('users');

            $table->string('haji_account_name');
            $table->unsignedBigInteger('haji_id');
            $table->foreign('haji_id')->references('id')->on('haji_datas');


            $table->string('money_type')->nullable()->default('NULL');
            $table->string('cheque_number')->nullable()->default('NULL');
            $table->string('responsible')->nullable()->default('NULL');

            $table->decimal('account_balance', 12, 2);
            $table->decimal('total_balance_remaining', 12, 2)->nullable()->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haji_account_datas');
    }
};
