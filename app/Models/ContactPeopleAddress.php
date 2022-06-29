<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPeopleAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Province()
    {
        return $this->belongsTo(Province::class, 'province');
    }

    public function City()
    {
        return $this->belongsTo(Regency::class, 'city');
    }

    public function District()
    {
        return $this->belongsTo(District::class, 'district');
    }
}
