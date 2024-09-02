<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class ModelGaji427 extends Model
{
    // use HasApiTokens, HasFactory, Notifiable;
    protected $table='gaji427';
    protected $primaryKey='kd_gaji427';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'kd_gaji427',
        'id_karyawan',
        'kd_jabatan',
        'kd_absen',
        'tanggal',
        'gajian'
    ];
}
