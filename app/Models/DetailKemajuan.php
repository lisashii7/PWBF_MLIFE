<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKemajuan extends Model
{
    use HasFactory;

    protected $table = "detail_kemajuan";
    protected $primaryKey = "id_detail_kemajuan";
}
