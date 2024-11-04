<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
  protected $fillable = ['name', 'email'];
  public function roles(): BelongsToMany
  {
    return $this->belongsToMany(Role::class, 'user_roles');
  }
}