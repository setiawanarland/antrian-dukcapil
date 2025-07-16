<?php

namespace App\Models;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Ambilantrian;
use App\Models\SubLayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Antrian extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $guarded = ['id'];
    protected $fillable = ['nama_antrian', 'kode', 'deskripsi', 'slug', 'batas_antrian', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Ambilantrians()
    {
        return $this->hasMany(Ambilantrian::class);
    }

    public function layanan()
    {
        return $this->hasMany(Layanan::class, 'antrian_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_antrian'
            ]
        ];
    }
}
