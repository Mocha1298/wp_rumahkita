<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    protected $fillable = [
        'judul', 'isi', 'foto',
    ];
    public $timestamps = false;

    protected $guarded = [];
}
