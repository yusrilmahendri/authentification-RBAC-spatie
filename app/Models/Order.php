<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penerima;
use App\Models\Pengirim;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function penerima(){
        return $this->belongsTo(Penerima::class);
    }

    public function pengirim(){
        return $this->belongsTo(Pengirim::class);
    }
}
