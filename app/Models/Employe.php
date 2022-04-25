<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
        /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'emp_nss';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var int
     */
    protected $keyType = 'string';
    protected $fillable = ['emp_nss','nom','prenom','tarif'];
    public function tarif()
    {
        return $this->belongsTo(Tarif::class);
    }
}
