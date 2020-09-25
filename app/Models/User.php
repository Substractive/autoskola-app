<?php

namespace App\Models;

use App\Models\Contracts\UserInterface;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements UserInterface
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute()
    {
        return $this->attributes[self::KEY_NAME];
    }

    public function setNameAttribute($value)
    {
        $this->attributes[self::KEY_NAME] = $value;
    }

    public function getTypeAttribute()
    {
        return $this->attributes[self::KEY_TYPE];
    }

    public function setTypeAttribute($type)
    {
       $this->attributes[self::KEY_TYPE] = $type;
    }

    public function getEmailAttribute()
    {
        return $this->attributes[self::KEY_EMAIL];
    }

    public function setEmailAttribute($email)
    {
        $this->attributes[self::KEY_EMAIL] = $email;
    }

    public function checkUserType($type)
    {
       if($this->attributes[self::KEY_TYPE] == $type)
           return true;
       return false;
    }

    public function getIdAttribute()
    {
        return $this->attributes[self::KEY_ID];
    }

    public function setPaswordAttribute($pass)
    {
        $this->attributes[self::KEY_PASSWORD] = Hash::make($pass);
    }
}
