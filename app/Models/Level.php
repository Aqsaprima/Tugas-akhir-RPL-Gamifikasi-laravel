<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  protected $table = 'levels';
  protected $fillable = ['judul', 'power', 'img', 'token', 'soal', 'jwbA', 'jwbB', 'jwbC', 'jwbD', 'jwbBenar', 'materi'];
}
