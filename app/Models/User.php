<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\QuizSubmission; // Ensure this import is present

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'address',
        'city',
        'number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The quizzes that belong to the user.
     */
    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }

    /**
     * The quiz submissions that belong to the user.
     */
    public function quizSubmissions()
    {
        return $this->hasMany(QuizSubmission::class);
    }
}
