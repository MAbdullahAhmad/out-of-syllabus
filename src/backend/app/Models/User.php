<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {
    
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN    = 'admin';
    const ROLE_CUSTOMER = 'customer';

    /**
     * mass-assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'first_name',
        'last_name',
        'middle_name',
        'username',
        'email',
        'password',
        'profile_picture',
        'role',
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


    /**
     * Get the admin associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admin() {
        return $this->hasOne(Admin::class);
    }


    /**
     * Get the customer associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer() {
        return $this->hasOne(Customer::class);
    }

    // Role inquiry methods
    public function is_admin   (){ return $this->role === 'admin'   ;}
    public function is_customer(){ return $this->role === 'customer';}

   /**
     * Get the user's full name by combining first_name, middle_name and last_name.
     *
     * @return string
     */
    public function getNameAttribute(){
        return implode(' ', array_filter([
            $this->first_name,
            $this->middle_name,
            $this->last_name,
        ]));

    }
}
