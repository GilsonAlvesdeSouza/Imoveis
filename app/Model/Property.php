<?php

namespace LaraDev\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = "proprieties";

    protected $fillable = [
        "titulo",
        "uri",
        "descricao",
        "preco_rentavel",
        "preco_venda",
    ];

    public $timestamps = false;

}
