<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function subjects()
    {
        return $this->hasMany(UserSubject::class);
    }

    public function revisionPlans()
    {
        return $this->hasMany(RevisionPlan::class);
    }

    public function tasks()
    {
        return $this->hasMany(DailyTask::class);
    }
}
