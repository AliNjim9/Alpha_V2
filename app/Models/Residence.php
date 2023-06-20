<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Residence extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nom',
        'longeur',
        'largeur',
        'surface',
        'bati',
        'nombre_blocs',
        'nombre_appartements',
        'a_vendre',
        'a_louer',
        'terrain_id',
        'fiche_location',
        'fiche_vente'
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid()."-residence";
        });
    }
    public function relatedTerrain()
    {
        return $this->belongsTo(Terrain::class,'terrain_id');
    }
    public function relatedUser()
    {
        return $this->belongsTo(User::class,'proprietaire');
    }
    public function Blocs()
    {
        return $this->hasMany(Bloc::class);
    }
    public function contrat_vente_info()
    {
        return $this->hasMany(Contrat_vente::class);
    }
}
