<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucionica;

class Termin extends Model
{
    use HasFactory;

    public function ucionica()
    {
        return $this->belongsTo(Ucionica::class);
    }
}
