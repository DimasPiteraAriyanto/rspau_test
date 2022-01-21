<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','no_rm','nama','umur','jenis_kelamin','id_diagnosa'
    ];
}
