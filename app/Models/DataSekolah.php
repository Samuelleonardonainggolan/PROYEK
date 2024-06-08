<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasekolah extends Model
{
    use HasFactory;

    protected $table = 'datasekolah';

    protected $primaryKey = 'datasekolah_id';

    protected $fillable = [
        'visi',
        'misi',
    ];

    public $timestamps = false;
}
