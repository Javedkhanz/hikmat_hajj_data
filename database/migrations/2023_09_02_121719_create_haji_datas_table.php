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
        Schema::create('haji_datas', function (Blueprint $table) {
            $table->id();
            $table->string('created_name');
            $table->unsignedBigInteger('created_id');
            $table->foreign('created_id')->references('id')->on('users');

            $table->string('image')->default('NULL')->nullable();
            $table->string('full_name');
            $table->string('father_name')->default('NULL')->nullable();
            $table->string('gender')->default('NULL')->nullable();
            $table->string('husband_name')->default('NULL')->nullable();
            $table->string('cnic_number')->unique(); // CNIC Number
            $table->date('cnic_expiry_date')->nullable(); // CNIC Expiry Date
            $table->string('passport_number')->default('NULL')->nullable(); // Passport Number
            $table->date('passport_expiry_date')->nullable(); // Passport Expiry Date
            $table->date('dob')->nullable(); // Date of Birth
            $table->string('blood_group')->default('NULL')->nullable();; // Blood Group
            $table->string('phone')->default('NULL')->nullable(); // Phone Number
            $table->string('email')->default('NULL')->nullable(); // Email Address
            $table->string('district')->default('NULL')->nullable(); // District
            $table->string('tehsil')->default('NULL')->nullable(); // Tehsil
            $table->text('address')->default('NULL')->nullable(); // Address
            $table->string('hajj_badal')->default('NULL')->nullable(); // Hajj Badal (Yes/No)
            $table->string('heir_name')->default('NULL')->nullable(); // Heir Name
            $table->string('heir_relation')->default('NULL')->nullable(); // Relation With Heir
            $table->string('heir_number')->default('NULL')->nullable(); // Heir Number
            $table->string('heir_cnic')->default('NULL')->nullable(); // Heir CNIC
            $table->string('emergency_number')->default('NULL')->nullable(); // Emergency Number
            $table->string('account_type')->default('NULL')->nullable(); // Emergency Number
            $table->string('total_money')->default('NULL')->nullable(); // Total Money
            $table->string('group')->default('NULL')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haji_datas');
    }
};
