<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function trainer()
    {
        return $this->hasOne(Trainer::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isTrainer()
    {
        return $this->role === 'trainer';
    }

    public function isStudent()
    {
        return $this->role === 'student';
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student', 'user_id', 'course_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
