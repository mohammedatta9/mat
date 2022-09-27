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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['admin','user','vendor','judger']);
            $table->enum('membership',['individual','company']);
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->enum('gender',['male','female']);
            $table->string('id_number')->unique()->nullable();
            $table->string('phone')->unique();
            $table->timestamp('phone_verify_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreignId('occupation_id')->nullable();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_number')->nullable();
            $table->string('contract')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('notes')->nullable();
            $table->double('current_balance')->nullable();
            $table->double('suspended_balance')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->text('bio')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
