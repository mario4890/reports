<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getByID(int $userID): self {
        $sql = $this->where('id', $userID)
            ->first();

        return $sql;
    }

    private function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    private function setEmail(string $mail): self
    {
        $this->email = $mail;

        return $this;
    }

    private function setPassword(string $password): self
    {
        $hashPassword = Hash::make($password);
        $this->password = $hashPassword;

        return $this;
    }

    public function updatePassword(string $password): self {
        $this->setPassword($password);
        $this->save();

        return $this;
    }
}
