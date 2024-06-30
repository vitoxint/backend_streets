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
        'name',
        'province_id'
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
        $this->streets()->each(function ($street) {
            $street->delete();
        });

        
        // Luego eliminar la calle
        return parent::delete();
    }
}
