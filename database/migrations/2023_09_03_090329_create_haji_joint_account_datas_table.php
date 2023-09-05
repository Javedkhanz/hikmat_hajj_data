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
        Schema::create('haji_joint_account_datas', function (Blueprint $table) {
            $table->id();
            $table->string('created_name');
            $table->unsignedBigInteger('created_id');
            $table->foreign('created_id')->references('id')->on('users');

            $table->string('join_account_name');
            $table->unsignedBigInteger('joint_account_name');
            $table->foreign('joint_account_name')->references('id')->on('haji_groups_datas');


            $table->string('money_type');
            $table->string('cheque_number')->nullable()->default('NULL');
            $table->string('responsible');


            $table->decimal('account_balance', 10, 2)->nullable()->default(0);
            $table->decimal('total_balance_remaining', 10, 2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haji_joint_account_datas');
    }
};
