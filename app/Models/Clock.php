<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clock extends Model {
  use HasFactory;

  protected $fillable = [
    'clock_at',
    'missed',
  ];

  protected $casts = [
    'clock_at' => 'datetime',
    'missed' => 'boolean',
  ];

  public function profile() {
    return $this->belongsTo(Profile::class);
  }
}
