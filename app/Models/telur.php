<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telur extends Model
{
    use HasFactory;
    protected $table = "telur";

    public function kandang()
    {
        return $this->belongsTo(kandang::class)->withDefault();
    }

}
