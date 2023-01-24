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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image', 500)->nullable();
            #$table->boolean('is_admin')->default(false);

            $table->string('numero_cadastro')->nullable();
            $table->string('rg')->nullable();
            $table->date('rg_expedicao')->nullable();
            $table->string('rg_orgaoexpedidor')->nullable();
            $table->string('cpf')->nullable();

            $table->date('data_nascimento')->nullable();
            $table->string('local_nascimento')->nullable(); //cidade e estado
            $table->string('filiacao_pai')->nullable();
            $table->date('filiacao_pai_nascimento')->nullable();
            $table->string('filiacao_mae')->nullable();
            $table->date('filiacao_mae_nascimento')->nullable();
            $table->string('nome_conjuge')->nullable(); //esposo ou esposa
            $table->date('data_nascimento_conjuge')->nullable();
            $table->tinyInteger('estado_civil')->nullable(); //solteiro (a), casado (a), separado (a) diverciado (a), viuvo (a)

            $table->string('endereco_residencial')->nullable(); //rua e numero
            $table->string('endereco_cep')->nullable();
            $table->string('endereco_bairro')->nullable();
            $table->string('endereco_cidade')->nullable();
            $table->string('telefone_residencial')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefone_comercial')->nullable();
            $table->string('telefone_outro')->nullable();
            $table->string('email_outro')->nullable();
            $table->string('profissao')->nullable();
            $table->string('apelido')->nullable();
            $table->string('biography')->nullable();

            $table->morphs('userable'); //polymorphic
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //deleted_at
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
