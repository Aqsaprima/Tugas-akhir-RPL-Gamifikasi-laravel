<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
  protected $table = 'dosen';
  protected $fillable = ['nip', 'nama', 'password'];
}
