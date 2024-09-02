<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelJabatan extends Model
{
    protected $table='jabatan';
    protected $primaryKey='kd_jabatan';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'kd_jabatan',
        'nama_jabatan',
        'gapok'
    ];
}
