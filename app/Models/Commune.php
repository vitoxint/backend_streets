<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Street;
use App\Models\Province;

class Commune extends Model
{

    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function streets()
    {
        // Entregar las calles relacionadas
        return $this->hasMany(Street::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function delete()
    {
        // Eliminar todas las calles relacionadas
        $this->streets()->delete();
        
        // Luego eliminar la calle
        return parent::delete();
    }
}
