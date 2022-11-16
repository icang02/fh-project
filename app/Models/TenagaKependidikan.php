<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKependidikan extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kependidikan';
    protected $guarded = [''];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
