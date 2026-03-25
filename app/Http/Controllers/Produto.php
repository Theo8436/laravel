<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador", "preco"=>2000],
            "produto2" => ["id"=>2, "nome"=>"mouse", "preco"=>50],
            "produto3" => ["id"=>3, "nome"=>"teclado", "preco"=>120],
            "produto4" => ["id"=>4, "nome"=>"monitor", "preco"=>900],
            "produto5" => ["id"=>5, "nome"=>"impressora", "preco"=>600],
            "produto6" => ["id"=>6, "nome"=>"webcam", "preco"=>150],
            "produto7" => ["id"=>7, "nome"=>"headset", "preco"=>200],
            "produto8" => ["id"=>8, "nome"=>"microfone", "preco"=>300],
            "produto9" => ["id"=>9, "nome"=>"notebook", "preco"=>3500],
            "produto10" => ["id"=>10, "nome"=>"tablet", "preco"=>1200],
            "produto11" => ["id"=>11, "nome"=>"celular", "preco"=>2500],
            "produto12" => ["id"=>12, "nome"=>"carregador", "preco"=>80],
            "produto13" => ["id"=>13, "nome"=>"cabo USB", "preco"=>25],
            "produto14" => ["id"=>14, "nome"=>"HD externo", "preco"=>400],
            "produto15" => ["id"=>15, "nome"=>"SSD", "preco"=>350],
            "produto16" => ["id"=>16, "nome"=>"placa de vídeo", "preco"=>1800],
            "produto17" => ["id"=>17, "nome"=>"memória RAM", "preco"=>250],
            "produto18" => ["id"=>18, "nome"=>"fonte", "preco"=>300],
            "produto19" => ["id"=>19, "nome"=>"gabinete", "preco"=>200],
            "produto20" => ["id"=>20, "nome"=>"roteador", "preco"=>180],
            "produto21" => ["id"=>21, "nome"=>"switch", "preco"=>220]
        ];
    
        return view('estoque', ["produtos"=>$produtos]);
    }
   }



