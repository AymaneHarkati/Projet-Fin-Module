<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

protected $primaryKey =  'emp_id';
public $incrementing = false;

protected $fillable = ['emp_id','par_id','debut','n_jour'];


    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
    public function parcelle()
    {
        return $this->belongsTo(Parcelle::class);
    }
}
