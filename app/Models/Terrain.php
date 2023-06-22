<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Terrain extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'longeur',
        'largeur',
        'bati',
        'a_vendre',
        'a_louer',
        'proprietaire',
        'fiche_location',
        'fiche_vente'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid()."-Terrain";
        });
    }
    public function relatedUser()
    {
        return $this->belongsTo(User::class,'proprietaire');
    }
    public function Residences()
    {
        return $this->hasMany(Residence::class);
    }
}
