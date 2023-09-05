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
        Schema::create('haji_cheque_datas', function (Blueprint $table) {
            $table->id();
            $table->string('accountent_name');
            $table->unsignedBigInteger('accountent_id')->nullable()->default(0);
            $table->foreign('accountent_id')->references('id')->on('users');


            $table->string('joint_account_name')->nullable()->default('NULL');
            $table->unsignedBigInteger('joint_account_id')->nullable()->default(0);
            $table->foreign('joint_account_id')->references('id')->on('haji_groups_datas');

            $table->string('haji_account_name')->nullable()->default('NULL');
            $table->unsignedBigInteger('haji_id')->nullable()->default(0);
            $table->foreign('haji_id')->references('id')->on('haji_datas');


            $table->string('bank_name');
            $table->string('cheque_number');
            $table->string('cheque_type');
            $table->string('cheque_amount');
            $table->string('cheque_status');


            $table->string('responsible');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haji_cheque_datas');
    }
};
