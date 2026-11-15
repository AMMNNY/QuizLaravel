<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function course(){
        return $this->hasOne(Course::class);
    }
    public function lecturesUser(){
        return $this->belongsToMany(LecturesUser::class);
    }
    public function courseUser(){
        return $this->belongsToMany(CourseUser::class);
    }
}
