<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_confirmed'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'is_admin',
        'email_verified_at',
        'created_at',
        'updated_at',
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
    public function Terrains()
    {
        return $this->hasMany(Terrain::class,'proprietaire');
    }
    public function Residences()
    {
        return $this->hasMany(Residence::class,'proprietaire');
    }
    public function Appartments()
    {
        return $this->hasMany(Appartment::class,'proprietaire');
    }
    public function contratsAsAcheteur()
    {
        return $this->hasMany(Contrat_vente::class, 'acheteur_id');
    }

    public function contratsAsVendeur()
    {
        return $this->hasMany(Contrat_vente::class, 'vendeur_id');
    }
}
