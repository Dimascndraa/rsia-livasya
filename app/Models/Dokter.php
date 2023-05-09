<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['umum', 'bpjs', 'pagi', 'sore'];

    public function bpjs()
    {
        return $this->hasOne(Bpjs::class);
    }

    public function umum()
    {
        return $this->hasOne(Umum::class);
    }

    public function pagi()
    {
        return $this->hasOne(Pagi::class);
    }

    public function sore()
    {
        return $this->hasOne(Sore::class);
    }
}
