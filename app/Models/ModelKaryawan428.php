<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelKaryawan428 extends Model
{
    protected $table='karyawan428';
    protected $primaryKey='id_karyawan';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'id_karyawan',
        'kd_jabatan',
        'nama',
        'umur',
        'gender'
    ];
}
