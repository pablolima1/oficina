<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = ['montadora_id', 'nome', 'potencia'];

    public function montadora(): BelongsTo
    {
        return $this->belongsTo(Montadora::class);
    }

}
