<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;
    protected $table = 'komponen';
    protected $fillable = [
        'nama_komponen'
    ];

    public function pertanyaan() {
        return $this->hasMany(Pertanyaan::class,'id_komponen','id');
    }
}
