<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayam extends Model
{
    use HasFactory;
    protected $table = "ayam";

    public function kandang()
    {
        return $this->belongsTo(kandang::class)->withDefault();
    }
}
