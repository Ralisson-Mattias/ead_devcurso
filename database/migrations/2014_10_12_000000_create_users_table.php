<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cpf', 11)->unique();
            $table->string('rg')->nullable();
            $table->string('orgao')->nullable();
            $table->date('data_expedicao')->nullable();
            $table->string('cep');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf', 2);
            $table->enum('grupo', ['admin', 'professor-admin', 'professor', 'aluno']);
            $table->enum('status', ['ativo', 'inativo']);
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
