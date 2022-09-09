<?php

namespace App\Models;

class Produk extends Model {
    protected $table = 'Produk';

    function seller()
    {
        return $this->Belongsto(User::class, 'id_user');
    }
}