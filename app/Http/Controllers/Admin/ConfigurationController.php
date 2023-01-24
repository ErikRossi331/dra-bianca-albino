<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configuration = Configuration::find(1);
        return view('admin.configuration.show',compact('configuration'));
    }

    public function edit($configuration)
    {
        $configuration = Configuration::find($configuration);
        return view('admin.configuration.edit',compact('configuration'));
    }

    public function update(Request $request)
    {
        $config = Configuration::find($request->id);
        $config->sitename = $request->sitename;
        $config->description = $request->description;
        $config->cnpj = $request->cnpj;
        $config->nome_fantasia = $request->nome_fantasia;
        $config->data_abertura = date('Y-m-d', strtotime($request->data_abertura));
        $config->representante = $request->representante;
        $config->natureza_juridica = $request->natureza_juridica;
        $config->documento = $request->documento;
        $config->estado_civil = $request->estado_civil;
        $config->nacionalidade = $request->nacionalidade;
        $config->logradouro = $request->logradouro;
        $config->numero = $request->numero;
        $config->cep = $request->cep;
        $config->complemento = $request->complemento;
        $config->bairro = $request->bairro;
        $config->municipio = $request->municipio;
        $config->uf = $request->uf;
        $config->contato_telefone = $request->contato_telefone;
        $config->contato_email = $request->contato_email;
        $config->link_facebook = $request->link_facebook;
        $config->link_twitter = $request->link_twitter;
        $config->link_instagram = $request->link_instagram;
        $config->link_linkedin = $request->link_linkedin;
        $config->google_analytics = $request->google_analytics;

        if($request->hasfile('logotipo')){
            $extension = $request->logotipo->extension();
            $namefile = "logo".date('d-m-Y').".".$extension;
            $request->logotipo->move( public_path('/images/uploads/'), $namefile);
            $config->logotipo = $namefile ? $namefile : '';
        }

        if($config->save())
            return redirect()->route('configuration.index')->with('success', 'Salvo com sucesso!');
        else
            return redirect()->back()->with('error', 'Falha ao salvar');

    }
}
