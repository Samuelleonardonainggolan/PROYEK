<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataalumni extends Model
{
    use HasFactory;

    protected $table = 'dataalumni';

    protected $primaryKey = 'dataalumni_id';

    protected $fillable = [
        'nama',
        'tahun',
    ];

    public $timestamps = false;
}
