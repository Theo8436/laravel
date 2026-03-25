<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
{
    function listarClientes(){
        $clientes = [
            "cliente1" => ["id"=>1, "nome"=>"João Silva", "email"=>"joao@gmail.com"],
            "cliente2" => ["id"=>2, "nome"=>"Maria Souza", "email"=>"maria@gmail.com"],
            "cliente3" => ["id"=>3, "nome"=>"Pedro Santos", "email"=>"pedro@gmail.com"],
            "cliente4" => ["id"=>4, "nome"=>"Ana Oliveira", "email"=>"ana@gmail.com"],
            "cliente5" => ["id"=>5, "nome"=>"Carlos Lima", "email"=>"carlos@gmail.com"],
            "cliente6" => ["id"=>6, "nome"=>"Fernanda Costa", "email"=>"fernanda@gmail.com"],
            "cliente7" => ["id"=>7, "nome"=>"Lucas Pereira", "email"=>"lucas@gmail.com"],
            "cliente8" => ["id"=>8, "nome"=>"Juliana Alves", "email"=>"juliana@gmail.com"],
            "cliente9" => ["id"=>9, "nome"=>"Rafael Martins", "email"=>"rafael@gmail.com"],
            "cliente10" => ["id"=>10, "nome"=>"Patricia Gomes", "email"=>"patricia@gmail.com"],
            "cliente11" => ["id"=>11, "nome"=>"Bruno Rocha", "email"=>"bruno@gmail.com"],
            "cliente12" => ["id"=>12, "nome"=>"Camila Ribeiro", "email"=>"camila@gmail.com"],
            "cliente13" => ["id"=>13, "nome"=>"Diego Carvalho", "email"=>"diego@gmail.com"],
            "cliente14" => ["id"=>14, "nome"=>"Larissa Melo", "email"=>"larissa@gmail.com"],
            "cliente15" => ["id"=>15, "nome"=>"Eduardo Barros", "email"=>"eduardo@gmail.com"],
            "cliente16" => ["id"=>16, "nome"=>"Beatriz Nunes", "email"=>"beatriz@gmail.com"],
            "cliente17" => ["id"=>17, "nome"=>"Gabriel Freitas", "email"=>"gabriel@gmail.com"],
            "cliente18" => ["id"=>18, "nome"=>"Renata Duarte", "email"=>"renata@gmail.com"],
            "cliente19" => ["id"=>19, "nome"=>"Thiago Teixeira", "email"=>"thiago@gmail.com"],
            "cliente20" => ["id"=>20, "nome"=>"Aline Fernandes", "email"=>"aline@gmail.com"]
        ];
    
        return view('clientee', ["clientes"=>$clientes]);
    }
   }



