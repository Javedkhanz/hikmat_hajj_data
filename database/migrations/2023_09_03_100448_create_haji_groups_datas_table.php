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
        Schema::create('haji_groups_datas', function (Blueprint $table) {
            $table->id();
            $table->string('created_name');
            $table->unsignedBigInteger('created_id');
            $table->foreign('created_id')->references('id')->on('users');

            $table->string('group_name')->unique();
            $table->string('group_cnic')->unique();
            $table->integer('total_group_member')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haji_groups_datas');
    }
};
