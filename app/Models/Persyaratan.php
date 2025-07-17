<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['persyaratan'];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id', 'layanan_id');
    }
}
