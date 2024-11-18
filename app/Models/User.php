<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * USER ATTRIBUTES
     * $this->attributes['id'] - int - contains the primary key of the user
     * $this->attributes['name'] - string - contains the user's name
     * $this->attributes['lastName'] - string - contains the user's last name
     * $this->attributes['address'] - string - contains the user's address
     * $this->attributes['email'] - string - contains the user's email address
     * $this->attributes['username'] - string - contains the username
     * $this->attributes['password'] - string - contains the user's encrypted password
     * $this->attributes['rol'] - string - contains the user's role (e.g., 'admin', 'user')
     * $this->attributes['state'] - string - contains the user's state (e.g., 'active', 'inactive')
     * $this->attributes['balance'] - float - contains the user's balance
     * $this->attributes['created_at'] - timestamp - contains the creation date of the user
     * $this->attributes['updated_at'] - timestamp - contains the last update date of the user
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name', 'lastName', 'address', 'email', 'username', 'password', 'rol', 'state', 'balance',
    ];

    public static function validate($request): void
    {
        $request->validate([
            'name' => 'required|string',
            'lastName' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function getId(): string
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = strtoupper($name);
    }

    public function getLastName(): string
    {
        return $this->attributes['lastName'];
    }

    public function setLastName(string $lastName): void
    {
        $this->attributes['lastName'] = strtoupper($lastName);
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress(string $address): void
    {
        $this->attributes['address'] = strtolower($address);
    }

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setEmail(string $email): void
    {
        $this->attributes['email'] = strtolower($email);
    }

    public function getUsername(): string
    {
        return $this->attributes['username'];
    }

    public function setUsername(string $username): void
    {
        $this->attributes['username'] = strtolower($username);
    }

    public function getPassword(): string
    {
        return $this->attributes['password'];
    }

    public function setPassword(string $password): void
    {
        $this->attributes['password'] = $password;
    }

    public function getRol(): string
    {
        return $this->attributes['rol'];
    }

    public function setRol(string $rol): void
    {
        $this->attributes['rol'] = strtoupper($rol);
    }

    public function getState(): string
    {
        return $this->attributes['state'];
    }

    public function setState(string $state): void
    {
        $this->attributes['state'] = strtoupper($state);
    }

    public function getBalance(): int
    {
        return $this->attributes['balance'];
    }

    public function setBalance(int $balance): void
    {
        $this->attributes['balance'] = $balance;
    }

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
}
