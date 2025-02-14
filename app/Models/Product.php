<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model

    {

        protected $table = "product";
        protected $primarykey = "id";
        protected $fillable = ['nim', 'name', 'prodi', 'angkatan', 'alamat'];
    
    }