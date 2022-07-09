<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('imagem')->nullable();
            $table->longText('descricao')->nullable();
            $table->longText('requisitos');
            $table->string('video')->nullable();
            $table->float('valor', 8, 2);
            $table->date('tempo_expiracao')->nullable();
            $table->unsignedBigInteger('professor_id');
                $table->foreign('professor_id')->references('id')->on('users');
            $table->enum('status', ['ativo', 'inativo']);
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
        Schema::dropIfExists('cursos');
    }
}
