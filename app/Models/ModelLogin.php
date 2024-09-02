<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelLogin extends Authenticatable 
{
    
    // use HasApiTokens, HasFactory, Notifiable;
    protected $table='user';
    protected $primaryKey='username';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'username',
        'password'
    ];
}
