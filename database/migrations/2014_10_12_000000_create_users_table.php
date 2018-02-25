<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
/**
    * Run the migrations.
    *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('loginName', 90);
            $table->string('password', 255);
            $table->string('titleName', 120);
            $table->string('name', 100);
            $table->string('lastName', 120);
            $table->string('idcard', 40);
            $table->enum('gender', ['male', 'female']);
            $table->date('dateOfBirth')->nullable();
            $table->string('email', 200)->unique();
            $table->string('mobile', 30)->nullable();
            $table->string('position', 90)->nullable();
            $table->string('office', 120)->nullable();
            $table->enum('userType', ['root', 'admin', 'webmaster', 'view'])->default('view');
            $table->enum('userStatus', ['acitve', 'await', 'reject'])->default('await');
            $table->dateTime('register')->nullable();
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
}
