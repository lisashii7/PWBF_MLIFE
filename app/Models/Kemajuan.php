<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    use HasFactory;

    protected $table = "kemajuan";
    protected $primaryKey = "id_kemajuan";

    public function santri() {
        return $this->belongsTo(Santri::class, 'id_santri', 'id_santri');
    }

    public function pengurus() {
        return $this->belongsTo(Pengurus::class, 'id_pengurus', 'id_pengurus');
    }
}
