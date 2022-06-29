<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SalesRequestDetail()
    {
        return $this->belongsTo(SalesRequestDetail::class);
    }

    public function Customer()
    {
        return $this->belongsTo(ContactPeople::class, 'customer_id');
    }

    public function CarBrands()
    {
        return $this->belongsTo(CarBrand::class, 'brand_id');
    }

    public function CarMerks()
    {
        return $this->belongsTo(CarMerk::class, 'merk_id');
    }

    public static function getAll()
    {
        return SalesRequest::where([
            ['status_request', '=', 2],
            ['is_active', '=', 1]
        ])->get();
    }

    public static function CustomerSelect()
    {
        return ContactPeople::where([
            ['type', '=', 'Customer'],
            ['is_active', '=', 1]
        ])->get();
    }

    public static function CarBrandsSelect()
    {
        return CarBrand::where('is_active', 1)->get();
    }

    public static function CarMerksSelect()
    {
        return CarMerk::where('is_active', 1)->pluck('name', 'id')->toArray();
    }

    public static function maxCode()
    {
        return SalesRequest::get()->max('code') + 1;
    }
}
