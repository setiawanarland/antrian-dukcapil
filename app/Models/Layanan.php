<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['nama_layanan', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function antrian()
    {
        return $this->belongsTo(Antrian::class, 'id', 'antrian_id');
    }

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class, 'layanan_id', 'id');
    }
}
