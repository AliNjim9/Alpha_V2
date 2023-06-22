<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Appartement extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid()."-Appartement";
        });
    }
    protected $fillable = [
        'nom_bloc',
        'longeur',
        'largeur',
        'nombre_pieces',
        'bati',
        'a_vendre',
        'a_louer',
        'bloc_id',
        'residence_id',
        'proprietaire',
        'fiche_location',
        'fiche_vente'
    ];
    public function relatedUser()
    {
        return $this->belongsTo(User::class,'proprietaire');
    }
    public function relatedResidence()
    {
        return $this->belongsTo(Residence::class,'residence_id');
    }
    public function relatedBloc()
    {
        return $this->hasbelongsToMany(Bloc::class,'bloc_id');
    }
    public function Fiche_Technique()
    {
        return $this->hasOne(Fiche_Technique_Appartement::class,'fiche_technique');
    }
}
