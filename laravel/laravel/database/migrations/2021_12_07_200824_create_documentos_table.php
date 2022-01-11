<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45);
            $table->integer('tamanho');
            // $table->integer('numero_assinaturas');
            $table->string('assinatura_responsavel', 45);
            $table->integer('qnt_pages');
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
        Schema::connection("pgsql")->dropIfExists('documentos');
    }
}
