<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table = 'kategori_berita';
    protected $guarded = [''];
    public $timestamps = false;

    public function scopeDaily($query, $filters)
    {
        $query->where($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        });
    }

    public function berita()
    {
        return $this->HasMany(Berita::class);
    }
}
