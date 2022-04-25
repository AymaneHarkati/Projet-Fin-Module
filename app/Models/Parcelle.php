<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    use HasFactory;
    protected $fillable = ['nom','lieu','superficie','prop_id'];

    public function agriculteur()
    {
        return $this->belongsTo(Agriculteur::class);
    }
}
