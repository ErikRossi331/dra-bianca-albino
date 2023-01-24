<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('sitename')->nullable(); //nome que vai aparecer no front do site
            $table->string('description')->nullable(); //descreve o site para meta_title
            $table->string('logotipo')->nullable();

            $table->string('cnpj')->nullable();
            $table->string('nome_fantasia')->nullable(); //Como Le Gusta - Buffet em domicilio
            $table->date('data_abertura')->nullable(); //data criação da empresa
            $table->string('natureza_juridica')->nullable(); //nome juridico
            $table->string('representante')->nullable(); //nome que vai para o contrato
            $table->string('documento')->nullable(); //RG
            $table->string('estado_civil')->nullable(); //contrato
            $table->string('nacionalidade')->nullable(); //contrato

            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('cep')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('municipio')->nullable();
            $table->string('uf')->nullable();

            $table->string('contato_telefone')->nullable();
            $table->string('contato_email')->nullable();

            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('google_analytics')->nullable();

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
        Schema::dropIfExists('configurations');
    }
}
