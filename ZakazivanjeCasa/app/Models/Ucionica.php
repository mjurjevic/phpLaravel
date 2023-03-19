<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Termin;

class Ucionica extends Model
{
    use HasFactory;
    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
}
