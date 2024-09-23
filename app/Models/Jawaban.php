<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
  protected $table = 'jawaban';
  protected $fillable = ['idSoal', 'npm', 'jwbAlgo', 'jwbCode'];
}
