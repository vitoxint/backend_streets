<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commune;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'commune_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
    
}
