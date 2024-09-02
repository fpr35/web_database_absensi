<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelAbsen424 extends Model
{
    protected $table='absen424';
    protected $primaryKey='kd_absen';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'kd_absen',
        'id_karyawan',
        'tanggal',
        'jam_masuk',
        'jam_keluar',
    ];
}
