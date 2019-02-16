<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('role', ['ADMIN', 'PROPIETARIO', 'ARRENDATARIO'])->default('ARRENDATARIO');
            $table->string('name');
            $table->string('email', 128)->unique();
            $table->string('password');
            $table->integer('torre')->unsigned();
            $table->integer('apartamento')->unsigned();
            $table->string('profile_img', 128)->nullable();
            $table->enum('status', ['PENDING', 'APPROVED'])->default('PENDING');
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
