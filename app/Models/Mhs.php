<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mhs extends Authenticatable
{
  protected $table = 'mhs';
  protected $fillable = ['npm', 'nama', 'password', 'power'];
}
