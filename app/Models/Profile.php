<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
  use HasFactory;

  protected $fillable = [
    'first_name',
    'last_name',
  ];

  // ->fullname
  public function getFullnameAttribute() {
    return $this->first_name . ' ' . $this->last_name;
  }

  public function user() {
    return $this->hasOne(User::class);
  }

  public function clocks() {
    return $this->hasMany(Clock::class);
  }
}
